<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! URL::to('item') !!}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('/api/item') !!}">View All Items</a></li>
        <li><a href="{!! URL::to('item/create') !!}">Create a Item</a>
    </ul>
</nav>

<h1>Create a NerdA</h1>

<form id="fop_form" method="post" class="ui form" action="{!! url('api/item') !!}">

    <div class="required fluid field">
        <label for="name">Jméno a příjmení</label>
        <p class="extra">Specifikujte jméno </p>
        <input id="name" type="text"name="name" data-validate="empty" value="test">
        <input id="reg_num" type="text"name="reg_num" data-validate="empty" value="123">
        <input id="price" type="text"name="price" data-validate="empty" value="123">
        <input id="description" type="text"name="description" data-validate="empty" value="test desc">
        <input id="place" type="text"name="place" data-validate="empty" value="puda">
        <input id="bought" type="text"name="bought" data-validate="empty" value="2015-10-20 12:11:02">

    </div>

</form>
<button type="submit" form="fop_form" value="Submit">Submit</button>

</div>
</body>
</html>