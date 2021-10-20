<?php

namespace TheRightWay\App\Controllers;

use TheRightWay\App\Support\View;

class InvoiceController
{
    public function index()
    {
        return View::make('invoices/index', ['foo' => 'bar']);
    }

    public function create()
    {
        return View::make('invoices/create');
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="my-file.pdf"');

        readfile(STORAGE_PATH . "/Nikola's Resume-2.pdf");
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /therightway');
        //it wont stop executing we must stop it.
        exit;
        //deleting files
        //unlink('interesting-interview-questions');
    }
}  