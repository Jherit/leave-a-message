<?php function add_widget() {
    
 $base_colour = get_option('base_colour'); 
 $headline = get_option('head_line'); 
 $button_colour = get_option('button_colour'); 
 $send_email = get_option('send_address');

     global $result;
     global $post;
     $post_slug = $post->post_name;
 ?>
 <p style="display:none;"><?php echo $send_email ?></p>
 <p id="baseColour" style="display:none;"><?php echo $base_colour ?></p>
 <p id="headline" style="display:none;"><?php echo $headline ?></p>
 <p id="buttonColour" style="display:none;"><?php echo $button_colour ?></p>
 <style>

 #mpm-form {
     bottom: 129px;
     position: fixed;
     z-index: 1006;
     height: 0px;
     transition: height .5s ease-out;
     width: 270px;
     background-color: #ec008c;
     border-radius: 8px;
     box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px 0px, rgba(0, 0, 0, 0.16) 0px 2px 32px 0px;
     overflow: hidden;
     font-family: Montserrat,"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial,sans-serif;
 }

 #mpm-form.spinIn {
     display:inline-block;
     height: 330px;
     transition: height .5s ease-in;
 }

 #mpm-form.spinIn #close-form {
     width: 30px;
     height: 30px;
     color: white;
     top: 1px;
     right: 1%;
     position: absolute;
     font-size: 40px;
     line-height: 27px;
     cursor: pointer;
 }

 #mpm-form.spinIn .message-form form {
     padding:20px 14px 10px;
     width:100%;
 }

 #mpm-form.spinIn .message-form form h2{
     text-align: left;
     width: 97%;
     color: #fff;
     font-size: 17px;
     line-height: 22px;
     margin: 0px 0px 10px;
 }

 #mpm-form.spinIn .message-form form h2:before{
     content:none;
 }

 #mpm-form.spinIn .message-form form label {
    text-align:left;
    color:#fff;
    width:100%;
    margin:12px 0px 2px 1px;
     font-size:14px;
 }

 #mpm-form.spinIn .message-form form input, #mpm-form.spinIn .message-form form textarea {
    padding:6px;
    width:100%;
    font-size:14px;
    margin-bottom:10px;
    font-family: Muli,"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial,sans-serif;
 }

 #mpm-form.spinIn .message-form form input.submit-but {
    background-color:#4f145b;
    border:2px solid #fff;
    border-radius:30px;
    color:#fff;
    font-family: Montserrat,"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight:600;
    cursor:pointer;
 }

 #mpm-form.spinIn .message-form form textarea {
     height:130px;
 }

 #mpm-form #result {
     color:#fff;
     font-size: 14px;
     font-weight: 500;
     margin-top: -4px;
     font-family: Muli,"Open Sans","Segoe UI","Helvetica Neue",Helvetica,Arial,sans-serif;
 }

 #mpm-widget {
     width: 80px;
     height: 80px;
     position: fixed;
     bottom: 30px;
     z-index: 1005;
     color: white;
     cursor: pointer;
 }

 #mpm-widget .button_background {
     /* box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px 0px, rgba(0, 0, 0, 0.16) 0px 2px 32px 0px; */
     /* -webkit-filter: drop-shadow( 3px 3px 2px rgba(0, 0, 0, .7));
     filter: drop-shadow( 10px 10px 10px rgba(0, 0, 0, .7)); */
 }

  #mpm-widget .arrow-pointer {
     -webkit-transform-origin: 50% 50%;
     transform-origin: center center;
     border:1px solid red;
     -webkit-transition: -webkit-transform .5s ease-in-out;
     transition:         transform .5s ease-in-out;
     transform: rotate(0deg) translate(0,0);
     
 } 
  #mpm-widget .arrow-pointer.spinIn {
     -webkit-transform: rotate(88deg) translate(-4px,-3px);
             transform: rotate(88deg) translate(-4px,-3px);
 } 


 #mpm-widget .svgelements {
     transition:         opacity 0.5s ease-in-out;
     opacity:1
 }
 #mpm-widget .svgelements.fadeOut {
     opacity:0
 }

 @media only screen and (max-width:3840px) {
     #mpm-form, #mpm-widget {
         right: 28%;
     }
 }

 @media only screen and (max-width:2700px) {
     #mpm-form, #mpm-widget {
         right: 20%;
     }
 }
 @media only screen and (max-width:2400px) {
     #mpm-form, #mpm-widget {
         right: 14%;
     }
 }
 @media only screen and (max-width:2200px) {
     #mpm-form, #mpm-widget {
         right: 12%;
     }
 }
 @media only screen and (max-width:1980px) {
     #mpm-form, #mpm-widget {
         right: 10%;
     }
 }
 @media only screen and (max-width:1600px) {
     #mpm-form, #mpm-widget {
         right: 6%;
     }
 }
 @media only screen and (max-width:1290px) {
     #mpm-form, #mpm-widget {
         right: 30px;
     }
 }

 @media only screen and (max-width:737px) {
     #mpm-form {
     bottom: 0px;
     right: 0px;
     transition: height .25s ease-out;
     width: 100%;
     border-radius: 0px;
     box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px;
     }

     #mpm-form.spinIn {
     height: 100%;
     transition: height .25s ease-in;
     }

     #mpm-form.spinIn #close-form {
     width: 40px;
     height: 40px;
     top: 10px;
     right: 4%;
     font-size: 73px;
     line-height: 39px;
     }

     #mpm-form.spinIn .message-form form {
     padding:50px 21px 20px;
     }

     #mpm-form.spinIn .message-form form h2{
     font-size: 22px;
     line-height: 28px;
     }

     #mpm-form.spinIn .message-form form input, #mpm-form.spinIn .message-form form textarea {
     padding:6px;
     font-size:16px;
     margin-bottom:20px;
     }

     #mpm-widget {
     width: 52px;
     height: 52px;
     bottom: 16px;
     right: 16px;
     }

     #mpm-form.spinIn .message-form form textarea {
     height:100px;
     }

 }

 </style>

     <div id="mpm-form"><div id="close-form">×</div>
         <div id="form-holda"></div>
         <div id="result"></div>
     </div>

     <svg style="display:none;" id="mpm-widget" class="" width="100%" height="100%" viewBox="0 0 54 57" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
         <path class="button_background" d="M23.259,1.347c2.097,-1.151 4.635,-1.151 6.732,-0c4.928,2.704 14.071,7.72 19.146,10.504c2.239,1.229 3.631,3.581 3.631,6.135c0,5.446 0,14.957 0,20.403c0,2.554 -1.392,4.906 -3.631,6.135c-5.075,2.784 -14.218,7.8 -19.146,10.504c-2.097,1.151 -4.635,1.151 -6.732,0c-4.928,-2.704 -14.071,-7.72 -19.146,-10.504c-2.239,-1.229 -3.631,-3.581 -3.631,-6.135c-0,-5.446 -0,-14.957 -0,-20.403c-0,-2.554 1.392,-4.906 3.631,-6.135c5.075,-2.784 14.218,-7.8 19.146,-10.504Z"/>
         <path class="svgelements" d="M42.75,19.254c0,-0.531 -0.211,-1.041 -0.587,-1.417c-0.376,-0.376 -0.886,-0.587 -1.417,-0.587c-5.784,-0 -22.458,-0 -28.242,-0c-0.531,0 -1.041,0.211 -1.417,0.587c-0.376,0.376 -0.587,0.886 -0.587,1.417c0,3.468 0,10.55 0,14.018c-0,0.531 0.211,1.041 0.587,1.417c0.376,0.376 0.886,0.587 1.417,0.587c5.784,-0 22.458,-0 28.242,-0c0.531,-0 1.041,-0.211 1.417,-0.587c0.376,-0.376 0.587,-0.886 0.587,-1.417c0,-3.468 0,-10.55 0,-14.018Z" style="fill:#fff;"/>
         <path class="arrow-pointer" d="M25.878,46.712l12.75,-14.25l-12.75,-14.25l4.5,14.25l-4.5,14.25Z" style="fill:#fff;"/>
         <path class="svgelements svg-colour" d="M14.25,21.75l24.378,0" style="fill:none;stroke-width:2px;"/>
         <path class="svgelements svg-colour" d="M14.25,26.25l18.003,0" style="fill:none;stroke-width:2px;"/>
     </svg>
 
     <script>
         const widGet = document.getElementById('mpm-widget');
         const theForm = document.getElementById('mpm-form');
         const closeForm = document.getElementById('close-form');
         const baseColour = document.getElementById('baseColour').textContent;
         const buttonColour = document.getElementById('buttonColour').textContent;
         const widgetBut = document.getElementsByClassName('button_background')[0];
         const svgColour = document.getElementsByClassName('svg-colour');
         const resultz = document.getElementById("result");
         const placeURL = window.location.href;

      
         var excludeArrayTwo = <?php echo json_encode($result); ?>;

         // Remove trailing new lines from the array.
         for(var i = 0; i < excludeArrayTwo.length; ++i) {
             excludeArrayTwo[i] = excludeArrayTwo[i].replace(/(\r\n|\n|\r)/gm,"")
         };

         // Show the widget if page slug does not match anything in the exclude array
         if(!excludeArrayTwo.includes(<?php print "'{$post_slug}'" ?>)) {
             widGet.setAttribute("style", "display:block");
         };
         
         theForm.setAttribute("style", "background-color:"+baseColour);
         widgetBut.setAttribute("fill", baseColour);

         for (var i = 0; i < svgColour.length; i++) {
             svgColour[i].setAttribute("stroke", baseColour);
         };
 
         widGet.addEventListener('click', function (e) {
             e.preventDefault();
             openClose ();
         });

         closeForm.addEventListener('click', function (e) {
             e.preventDefault();
             openClose ();
         });

 function openClose () {
     if (widGet.classList.contains('active')) {
         document.querySelectorAll('.svgelements').forEach(element => element.classList.remove('fadeOut'));
         removeForm();
         document.getElementsByClassName('arrow-pointer')[0].classList.remove('spinIn');
         theForm.classList.remove('spinIn');
         widGet.classList.remove('active');
         resultz.innerHTML = '';
     } else {
         document.querySelectorAll('.svgelements').forEach(element => element.classList.add('fadeOut'));
         insertForm();
         document.getElementsByClassName('arrow-pointer')[0].classList.add('spinIn');
         theForm.classList.add('spinIn');
         widGet.classList.add('active');
     };

     function insertForm() {
         const headLine = document.getElementById('headline').textContent;
         var messageForm = document.createElement('div');
             messageForm.className = 'message-form';
             messageForm.innerHTML =
                         `<form id="pageForm" action="" method="post" onsubmit="return sendForm()">
                             <h2 id="headLineInsert">Contact HomeOwners Alliance</h2>
                             <!-- <label name="name">Name</label> -->
                             <input type="hidden" name="fullname"/>
                             <!-- <label name="email">Email</label> -->
                             <input type="email" placeholder="Email" name="email" id="emailAddress" required/>
                             <!-- <label name="message">Your message</label> -->
                             <textarea placeholder="Ask your question here" name="message" id="messageText" required></textarea>
                             <input type="hidden" name="window" value="${placeURL}"></label>
                             <p id="error-alert"></p>
                             <input type="submit" id="pageMessageSubmit" name="pageMessageSubmit" value="send message" class="submit-but" checkrequired="true">
                             </form>
                         `;
             document.getElementById('form-holda').appendChild(messageForm);
             const headLineInsert = document.getElementById('headLineInsert');
             headLineInsert.innerHTML = headLine;
             document.getElementById('pageMessageSubmit').setAttribute("style", "background-color:"+buttonColour);

             document.getElementById('pageForm').addEventListener('submit', hideButton);

             function hideButton() {
                document.getElementById('pageMessageSubmit').disabled = true;
                setTimeout(function() { openClose(); }, 2000);
             }
     };

         function removeForm() {
             elements = document.getElementsByClassName('message-form');
             while(elements.length > 0){
                 elements[0].parentNode.removeChild(elements[0]);
             };
         };
 };  

 function sendForm(){
         var form = document.getElementById('pageForm');
         var data = new FormData(form);
         const Http = new XMLHttpRequest();
         const url='/wp-content/plugins/hoa-page-message/includes/send.php';
         Http.open("POST", url);
         Http.send(data);
         Http.onreadystatechange = function () {
             if(Http.readyState === XMLHttpRequest.DONE && Http.status === 200) {
                 resultz.innerHTML = Http.responseText;
                 resultz.setAttribute("style", "display:block");
             }
         };
     return false;
 };

</script>
<?php } add_action( 'wp_footer', 'add_widget'); 