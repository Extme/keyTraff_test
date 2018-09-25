
<html>
    <head>
        <meta charset="UTF-8">
        <title>Тестовое задание</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
           integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
           integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src = "js/script.js"> </script>
    </head>
    <body>
        <form method="post" id="inquery0">
		
		<button id="submit" type="submit" value="Submit" >Первый запрос</button>
	</form>
        <span id="error_text" style="color: red"></span>
        <table class="table" id = "table_order" >
            <tr>
                <td colspan=2><b>Информация о заказах</b></td>
            </tr>
            
            <tr>
              <th id ="id">номер заказа</th>
              <th id ="name">название товара</th>
              <th id ="price">цена</th>
              <th id ="count">количество товара</th>
              <th id ="fio">менеджер</th>
            </tr>    
        </table>
        
        <form method="post" id="inquery1">
		
		<button id="submit" type="submit" value="Submit" >Второй запрос</button>
	</form>
        
        <table class="table" id = "table_product" >
            <tr>
                <td colspan=2><b>Информация о товарах</b></td>
            </tr>
            
            <tr>
              <th id ="name_1">название товара</th>
              <th id ="price_1">цена</th>
              <th id ="count_1">количество товара</th>
            </tr>    
        </table>

    </body>
</html>