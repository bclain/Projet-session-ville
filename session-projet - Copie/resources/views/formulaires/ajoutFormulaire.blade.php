<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Création de formulaire</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

<div style="width: 80%; margin: 50px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 20px;">Form Maker</h1>
    
    <div style="margin-bottom: 20px;">
        <label for="formTitle" style="display: block; margin-bottom: 5px; font-weight: bold;">Form Title</label>
        <input type="text" id="formTitle" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 20px;">
        <label for="formDescription" style="display: block; margin-bottom: 5px; font-weight: bold;">Form Description</label>
        <textarea id="formDescription" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
    </div>
    
    <div style="margin-bottom: 20px;">
        <label for="textField" style="display: block; margin-bottom: 5px; font-weight: bold;">Text Field</label>
        <input type="text" id="textField" placeholder="Your text here..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 20px;">
        <label for="emailField" style="display: block; margin-bottom: 5px; font-weight: bold;">Email Field</label>
        <input type="email" id="emailField" placeholder="Your email here..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="margin-bottom: 20px;">
        <label for="passwordField" style="display: block; margin-bottom: 5px; font-weight: bold;">Password Field</label>
        <input type="password" id="passwordField" placeholder="Your password here..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    
    <div style="text-align: center;">
        <button type="button" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 4px; cursor: pointer;">Create Form</button>
    </div>
</div>

</body>
</html>
