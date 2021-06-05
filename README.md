# Print-Invoice-In-Laravel
A5 size invoice which made in laravel. you can download these as well as print via printer. file is in PDF format.


## niklasravnsborg/laravel-pdf (Package)

### Blade Page
    page size you can set like these:
    @page { sheet-size: A5; } ( in your CSS )
    
### Controller
    $pdf = PDF::loadView(blade page name);
    return $pdf->stream(pdfname.pdf);  
    return $pdf->download(pdfname.pdf); 
    $pdf->save('path of folder/'.$pdffilenameWithextension); // $pdffilenameWithextension = pdfname.pdf;
    
    Using :
    stream : you can directly view pdf.
    download : As his name said all the things you can download the pdf file.
    save : Save pdf file in your project folder.
