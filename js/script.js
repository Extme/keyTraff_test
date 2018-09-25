window.onload = function () {

         $("#inquery0").submit(function(e) {
             var url = "dataGet.php";
             var query = 'inquery0';
             
             $.ajax({
                 type: "POST",
                 url: url,
                 data: {query : query},
                 success: function(data)
                   {
                     var jsonResponse = JSON.parse(data);
                     if (jsonResponse == null){
                         $('#error_text').css('visibility', 'visible');
                         $('#error_text').text('Информация не найдена!');
                         $('#table_info').css('visibility', 'hidden');
                     }
                     else {
                         $('#table_order').css('visibility', 'visible');
                         for (var i = 0; i<jsonResponse.length; i++){
                               $('#id').append("<tr><th>"+jsonResponse[i].id+"</th></tr>");
                               $('#name').append("<tr><th>"+jsonResponse[i].name+"</th></tr>");
                               $('#price').append("<tr><th>"+jsonResponse[i].price+"</th></tr>");
                               $('#count').append("<tr><th>"+jsonResponse[i].count+"</th></tr>");
                               $('#fio').append("<tr><th>"+jsonResponse[i].fio+"</th></tr>");
                         }
                     }
                   }
             });
         e.preventDefault();
         }); 
         
         $("#inquery1").submit(function(e) {
             var url = "dataGet.php";
             var query = 'inquery1';
             
             $.ajax({
                 type: "POST",
                 url: url,
                 data: {query : query},
                 success: function(data)
                   {
                     var jsonResponse = JSON.parse(data);
                     if (jsonResponse == null){
                         $('#error_text').css('visibility', 'visible');
                         $('#error_text').text('Информация не найдена!');
                         $('#table_product').css('visibility', 'hidden');
                     }
                     else {
                         for (var i = 0; i<jsonResponse.length; i++){
                               $('#name_1').append("<tr><th>"+jsonResponse[i].name+"</th></tr>");
                               $('#price_1').append("<tr><th>"+jsonResponse[i].price+"</th></tr>");
                               $('#count_1').append("<tr><th>"+jsonResponse[i].count+"</th></tr>");    
                         }
                     }
                   }
             });
         e.preventDefault();
         }); 
  }
  
  
