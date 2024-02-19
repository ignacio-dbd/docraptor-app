<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DocRaptor;
class StrategyReportController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        //dd('hello');
        $docraptor = new DocRaptor\DocApi();
        $docraptor->getConfig()->setUsername(env('DOCRAPTOR_API_KEY'));

        $doc = new DocRaptor\Doc();
        $doc->setTest(true); // test documents are free but watermarked

        $documentContent = view('documents.strategy-report', [])->render();

        $doc->setDocumentContent($documentContent);

        $fileName = "test-strategy-report.pdf";

        $doc->setName($fileName);
        $doc->setDocumentType("pdf");
        $doc->setJavascript(true); // enable JavaScript processing
        $prince_options = new DocRaptor\PrinceOptions(); // pdf-specific options
        $doc->setPrinceOptions($prince_options);
        $prince_options->setMedia("screen"); // use screen styles instead of print styles

        $create_response = $docraptor->createDoc($doc);

        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename='.$fileName);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . strlen($create_response));
        ob_clean();
        flush();
        echo($create_response);
        exit;

        //return Inertia::render('TvDashboard', ['layout' => $layout->presenter()->display()]);
    }
    public function strategyReport(){

        dd('hi');

        $docraptor = new DocRaptor\DocApi();
        $docraptor->getConfig()->setUsername(env('DOCRAPTOR_API_KEY'));

        $doc = new DocRaptor\Doc();
        $doc->setTest(true); // test documents are free but watermarked

        $documentContent = view('documents.strategy-report', [])->render();

        $doc->setDocumentContent($documentContent);

        $fileName = "test-strategy-report.pdf";

        $doc->setName($fileName);
        $doc->setDocumentType("pdf");
        $doc->setJavascript(true); // enable JavaScript processing
        $prince_options = new DocRaptor\PrinceOptions(); // pdf-specific options
        $doc->setPrinceOptions($prince_options);
        $prince_options->setMedia("screen"); // use screen styles instead of print styles

        $create_response = $docraptor->createDoc($doc);

        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename='.$fileName);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . strlen($create_response));
        ob_clean();
        flush();
        echo($create_response);
        exit;
    }

}
