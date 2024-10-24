<?php
namespace WeillCornellMedicine\PrettyResponse;

class PrettyResponse extends \ExternalModules\AbstractExternalModule
{
    function redcap_every_page_top($project_id){
        echo "TOP of the page";
    }
}

// if (PAGE == 'API/playground.php'){
//     ?>
//     <script type="text/javascript">
//         window.addEventListener("load", function() {
//             try {
//                 let req_div = document.getElementById("exec_req").parentElement;
//                 req_div.style.width = "350px";

//                 let pretty_btn = document.createElement("button");
//                 pretty_btn.innerText = "Pretty Response";
//                 pretty_btn.classList.add("jqbuttonmed", "ui-button", "ui-corner-all", "ui-widget");
//                 pretty_btn.addEventListener('click', function() {
//                     if(document.getElementById("exec_resp").children.length > 1){
//                         let textarea_node = document.getElementById("exec_resp").querySelector("textarea");
//                         let jsonObject = JSON.parse(textarea_node.value);
//                         let formattedJson = JSON.stringify(jsonObject, null, 2); 
//                         textarea_node.value = formattedJson;
//                     }
//                 });

//                 req_div.appendChild(pretty_btn);
//             } catch (error) {
//                 console.error(error);
//             }
//         });
//     </script>
//     <?php
// }