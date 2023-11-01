import './bootstrap';
import 'flowbite';
import 'flowbite/dist/datepicker';
import Alpine from 'alpinejs';
import jsPDF from 'jspdf';
import html2canvas from 'html2canvas';
import chart from 'chart.js/auto'

window.Alpine = Alpine;
window.Chart = chart;
 
Alpine.start();
document.getElementById('cetak-button').addEventListener("click", async () => {
  let doc = new jsPDF();
    var elementHTML = document.querySelector("#ready-to-print");

    doc.html(elementHTML, {
        callback: function(doc) {
            // Save the PDF
            doc.save('document-html.pdf');
        },
        margin: [10, 10, 10, 10],
        autoPaging: 'text',
        x: 0,
        y: 0,
        width: 190, //target width in the PDF document
        windowWidth: 675 //window width in CSS pixels
    });
})