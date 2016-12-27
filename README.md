# php-form-library
A Personal PHP form Library for creating Forms with seemless authentication: And Verification out of the box :smiles:

## How to Install
<b>Using Composer</b>
You can do
<code>composer require "kofacts/formhelper"</code>

<b>Using The Directory</b> 
You can do [Clone the Repo to your Root Dir.]
<code>git clone https://github.com/Kofacts/php-form-library.git</code>

And then use either PHP Autoload to load the class or

<code>require_once "..src/Form.php"</code>

in the page you intend to use.

## How to Use
This is a very simple Library which i mostly use while creating Applications that work with Forms.
The Code below creates a simple form.

1. Create a New instance of the class.

<code>$form= new Form;</code>

<code>
	echo $form::open("post","http://androidwebsite.com");
	echo $form::input("password",array("name"=>"username","style"=>"color:red; width:100px; height:30px;"));
	echo $form::textarea();
	echo $form::close();
</code>

The input field can either be password or text. Depending on your choice.
The Array in the input field can either be the name or style.
The Text Area can help in creating Text Areas in HTML

And then the form close can be used for closing the whole process.


## Contributing...
You can always pull a request when necessary.