<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeAMS</title> 
    <link rel="icon" type="image/png" sizes="16x16" href="/PERKESO_UI/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>   
    <style>
            /*right click*/
              .context-menu ul{ 
                z-index: 1000;
                position: absolute;
                overflow: hidden;
                border: 1px solid #CCC;
                white-space: nowrap;
                font-family: sans-serif;
                background: #FFF;
                color: #333;
                border-radius: 5px;
                padding: 0;
            }
            /* Each of the items in the list */
            .context-menu ul li {
                padding: 8px 12px;
                cursor: pointer;
                list-style-type: none;
            }
            .context-menu ul li:hover {
                background-color: #DEF;
            }
             </style>
</head>
<body>

 
@if($notes=='1')

<div class="container" style="width:100%; height:100%;"  oncontextmenu ="event.preventDefault();$('#context-menu').show();$('#context-menu').offset({'top':mouseY,'left':mouseX})">
        <div style="width: 80%; margin: 0 auto">
         @if($show!=null && $show=='1')
        <embed type="application/pdf" src="{{route('viewNotes')}}" width="100%" height="835" ></embed>
        @elseif($show!=null && $show =='0')
        <embed type="application/pdf" src="{{route('viewNoNotes')}}" width="100%" height="835" ></embed>
        @elseif($show==null)
        <embed type="application/pdf" src="{{route('viewNotes')}}" width="100%" height="835" ></embed>
        </div>
        @endif
 </div>

 
<div class="context-menu" id="context-menu" style="display:none;position:absolute;z-index:99">
        <ul>
         
          <li>
               
                <?php
               
                if ($show == "0") {
                    ?>
                    {{-- <a href="' . $folder_path . '">Link text</a> --}}
                <a href="{{route("download_document")}}?docname={{$docname}}&show=1"><i class="fa fa-eye"></i>
                        Show Note
                    </a>
                    <?php
                } else { //show
                    ?>
                    <a href="{{route("download_document")}}?docname={{$docname}}&show=0"><i class="fa fa-share fa-fw"></i>
                        Hide Note
                    </a>
                    <?php
                }
                ?>
            </li>       
        </ul>
    </div>
@elseif($notes == '0' ||$notes ==null)
    <div class="container" style="width:100%; height:100%;"  oncontextmenu ="event.preventDefault();$('#context-menu').show();$('#context-menu').offset({'top':mouseY,'left':mouseX})">
            <div style="width: 80%; margin: 0 auto">
            <embed type="application/pdf" src="{{route('viewNoNotes')}}" width="100%" height="835" ></embed>
            </div>
     </div>
     @else
    
    @endif

</body>
</head>
</html>

<script>
        var mouseX;
        var mouseY;
        $(document).mousemove(function(e) {
           mouseX = e.pageX; 
           mouseY = e.pageY;
        });  
        $(document).bind("mousedown", function (e) {
        // If the clicked element is not the menu
        if (!$(e.target).parents(".context-menu").length > 0) {    
            // Hide it
            $(".context-menu").hide(100);
        }
      });
    </script>