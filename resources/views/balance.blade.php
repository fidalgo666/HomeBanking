@extends('layout.app', [
        'jumboTitle' => 'Balance Financiero',
        'jumboDesc' => 'Aca podes controlar los movimientos de tu cuenta',
        'num' => '8',
        'color' => 'jumbotron jumbotron-fluid'
        ])

@section('content')

<div class="container">
   <div class="row">
       <div class="alert alert-primary" role="alert">
           <strong>Saldo $1000</strong>
       </div>
       <table class="table table-hover">
           <thead>
               <tr>
               <th scope="col">Fecha</th>
               <th scope="col">Descripcion</th>
               <th scope="col">Importe</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <th scope="row">10/12/2018</th>
                   <td>Descripcion</td>
                   <td>100</td>
               </tr>

    <!-- Whatsapp widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+5491150019009", // WhatsApp number
                call_to_action: "Escríbenos!",
                position: "right",
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /Whatsapp widget -->

           </tbody>
       </table>
   </div>
</div>
