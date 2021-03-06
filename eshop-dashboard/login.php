<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>NTQ Solution Admin Control Panel</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/> 
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="loginBox">        
        <div class="loginHead">
            <img src="img/logo.png" alt="NTQ Solution Admin Control Panel" title="NTQ Solution Admin Control Panel"/>
        </div>
        <form class="form-horizontal" action="list-categories.php" method="POST">            
            <div class="control-group">
                <label for="inputUsername">Username</label>                
                <input type="text" id="inputUsername"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Password</label>                
                <input type="password" id="inputPassword"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox"> Remember me</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Sign in</button>
            </div>
        </form>             
    </div>      
</body>
</html>
