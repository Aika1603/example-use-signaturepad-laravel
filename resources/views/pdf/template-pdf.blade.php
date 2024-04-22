<html>
<head>
	<style>
        body {
            color:black;
            font-size:11pt;
            -webkit-print-color-adjust:exact;
            font-family:'Times New Roman', Times, serif;
        }
        
        #header-table{
            font-family:'Times New Roman', Times, serif;
        }

        #title-surat{
            margin-top:20px;
            text-align:center;
            font-size:18pt;
            color:black;
            font-family:'Times New Roman', Times, serif;
        }
        
        #content {
            color:black;
            margin-left:50px; margin-right:50px;font-size:11pt;text-align:justify;
            font-family:'Times New Roman', Times, serif;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            font-family:'Times New Roman', Times, serif;
        }

        .table, td, th {
            text-align: left;
            padding: 2px;
            font-family:'Times New Roman', Times, serif;
        }

        .visualisasi {
            margin-top: 5px;
            margin-left: 8%;
            padding:1px;
            padding-bottom:0px;
            width: 85%;
            font-family:'Times New Roman', Times, serif;
        }

        .visualisasi > div {
            padding-top:10px;
            font-family:'Times New Roman', Times, serif;
        }

        .jabatan_visualisasi {
            margin-left: 10%;
            text-align:center;
            font-family:'Times New Roman', Times, serif;
        }

        .text-ttd {
            padding-top:0px;
            padding-left: 10px;
            line-height: 1.2;
            padding-bottom:0px;
            font-size:8pt;
            font-family:'Times New Roman', Times, serif;
        }

        .text-ttd > a {
            line-height: 0;
            font-family:'Times New Roman', Times, serif;
            /* color:rgb(179, 177, 177); */
        }

        .jabatannya {
            padding-top:5px;
            transform: scale(1,1.4);
            font-size: 9pt;
            letter-spacing: -0.5px;
            font-family:'Times New Roman', Times, serif;
        }

        .namanya {
            font-size: 9pt;
            padding-top:10px;
            transform: scale(1,1.2);
            font-family:'Times New Roman', Times, serif;
        }

        @page {
            header: page-header;    
        }

    </style>
</head>
<body>
    <htmlpageheader name="page-header">
        <table style="width:100%;margin-left:-10px;padding-top:10px">
            <tr>
                <td style="width:90%">
                    <small>
                        <ul>
                            <li style="font-size:8pt;">UU ITE No 11 Tahun 2008 Pasal 5 ayat 1 : '<i>Informasi Elektronik dan/atau Dokumen Elektronik dan/atau hasil cetaknya merupakan alat bukti hukum yang sah.</i>'</li>
                            <li style="font-size:8pt;">Surat ini ditandatangani secara elektronik menggunakan <b>sertifikat elektronik</b> yang diterbitkan <b>BSrE</b>.</li>
                            <li style="font-size:8pt;">Surat ini dapat dibuktikan keasliannya dengan memindai QR Code</li>
                        </ul>
                    </small>
                </td>
            </tr>
        </table>
    </htmlpageheader>

    <table border="0" width="100%" id="header-table">
        <tbody>
            <tr>
                <td style="text-align:center;margin-left:30px;" valign=middle>
                    <img src="{{ public_path('images/logo_karawang.png') }}" style="margin-top:0px;" height=100 alt="Foto">
                </td>
                <td style="text-align:center;">
                    <span style="font-size:16pt;font-weight:lighter"> PEMERINTAH KABUPATEN KARAWANG  </span> <br/>
                    <b style="font-size:20pt;"> INSPEKTORAT </b> <br/>
                    <div style="font-size:11pt">
                        Jln. Jenderal A. Yani No.26 Karawang Tel. (0267) 402513. Fax (0267) 412107 <br/> Karawang, Jawa Barat 41315
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <hr style="height:3px;background-color:#000;margin-top:10px;"/>

    <div style="text-align:center;margin-top:40px">
        <span id="title-surat"><u><b>SURAT - PERINTAH</b></u></span>
        <br/><span style="font-size:12pt;margin-top:-10px;">Nomor : XXXXX</span>
    </div>

    <div style="margin-top:40px;margin-left:50px;margin-right:50px">
        <table class="table">
            <tr>
                <td width="100">Nama</td>
                <td width="20">:</td>
                <td>A</td>
            </tr>
            <tr>
                <td width="100" valign="top">Jabatan</td>
                <td width="20" valign="top">:</td>
                <td>INSPEKTUR KABUPATEN KARAWANG </td>
            </tr>
        </table>

        <div style="text-align:center;font-size:12pt;margin-top:10pt;margin-bottom:10pt;">
            <h4>M E M E R I N T A H K A N :</h4>
        </div>

        <table class="table">
            <tr>
                <td width="100" valign="top">Kepada</td>
                <td width="20" valign="top">:</td>
                <td valign="top">
                    <table class="table" >
                        <tr>
                            <td valign="top"></td>
                            <td valign="top">1).</td>
                            <td valign="top">
                                <table class="table" style="margin-top:-3px">
                                    <tr>
                                        <td width="100" valign="top">a. Nama</td>
                                        <td width="20" valign="top">:</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td width="100" valign="top">b. Jabatan</td>
                                        <td width="20" valign="top">:</td>
                                        <td>Sekretaris </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td width="100" valign="top">Untuk</td>
                <td width="20" valign="top">:</td>
                <td valign="top">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ex consequatur recusandae eius voluptatibus odit, aliquam possimus cupiditate modi a illo magni nam, ullam placeat iusto expedita, quaerat harum dolorem!
                </td>
            </tr>
        </table>

        <pagebreak />

        <div style="margin-left:300px;margin-top:40px">
            <table style="margin-left:50px;">
                <tr>
                    <td>Dikeluarkan di</td>
                    <td>:</td>
                    <td>Karawang</td>
                </tr>
                <tr>
                    <td>Pada tanggal</td>
                    <td>:</td>
                    <td>{{ date('Y-m-d') }}</td>
                </tr>
            </table>
            <div style="text-align:center">
                INSPEKTUR KABUPATEN KARAWANG
                <br>
                <div class="visualisasi">
                    TTD
                </div>
            </div>
        </div>
    </div>

    {{-- <pagebreak /> --}}
    {{-- <pagebreak orientation="L" /> --}}
    
</body>
</html>