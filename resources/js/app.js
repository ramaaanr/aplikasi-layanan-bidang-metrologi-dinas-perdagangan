import './bootstrap';
import 'flowbite';
import 'flowbite/dist/datepicker';
import Alpine from 'alpinejs';
import jsPDF from 'jspdf';
import html2canvas from 'html2canvas';
import chart from 'chart.js/auto'

window.Alpine = Alpine;
window.Chart = chart;
window.JsPDF = jsPDF
 
Alpine.start();
