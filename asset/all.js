$(document).ready(function(){
    //load data
    load_data();
      function load_data(query)
      {
          $.ajax({
              url:"inc/data.php",
              method:"post",
              data:{query:query},
              success:function(data)
              {
          $('#result').html('');
          arr_data = $.parseJSON(data || "[]");
          console.log(data);
          console.log(arr_data);
          $.each(arr_data, function (key, value) {
            $('#result').append('<li class="list-group-item link-class font-roboto">'+value.codigo+' | <span class="font-weight-bold">'+value.descricao+' </span> | <span class="text-muted">Federal: '+value.nacionalfederal+'</span>| <span class="text-muted">Estadual: '+value.estadual+'</span></li>'); 
          })
          }
          });
      }
    //fim loaddata
    //search
    $('#search').keyup(function(){
          var search = $(this).val();
          if(search != '')
          {
              load_data(search);
          }
          else
          {
              load_data();			
          }
  
      });
  });
    //fim search 
   $('#result').on('click', 'li', function(){
    var click_text = $(this).text().split('|');
    $('#search').val($.trim(click_text[0]));
    $("#result").html('');
    
   });
  
  /*Copiar*/
  $(document).ready(function(){
    $("#success-alert").hide();
    document.getElementById("button").disabled = true;
  });
  
  $("#search").change(function(){
  if ( document.getElementById("search").value != "") {
  document.getElementById("button").disabled = false;
    } else {
    document.getElementById("button").disabled = true;
  }
  });
  
  function myFunction() {
        var copyText = document.getElementById("search");
  
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
  
    /* Copy the text inside the text field */
    document.execCommand("copy");
  
    /* Alert the copied text */
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
        $("#success-alert").slideUp(500);
      });
    /* Get the text field */
    
  }                   
  
  /*ToolTips*/
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })