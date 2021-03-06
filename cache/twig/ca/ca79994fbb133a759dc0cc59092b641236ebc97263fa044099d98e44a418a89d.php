<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template.html.twig */
class __TwigTemplate_8080564e079c827941fb82fec41e289d6033fa8dc74c772903a96d150dd6ec5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | Focus</title>
    <link rel=\"stylesheet\" href=\"https://necolas.github.io/normalize.css/8.0.1/normalize.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css\" />
    <link rel=\"stylesheet\" href=\"http://localhost:8010/public/css/main.css\" />
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 299
        echo "</head>

<body>
    ";
        // line 302
        $this->displayBlock('body', $context, $blocks);
        // line 369
        echo "    <script src=\"https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js\"></script>
    ";
        // line 370
        $this->displayBlock('js', $context, $blocks);
        // line 555
        echo "</body>

</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello!";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<style>
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        a {
            color: #296efa;
            cursor: pointer;
        }

        .login {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: 3fr 1.5fr;
            grid-template-columns: 3fr 1.5fr;
        }

        .login .form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #f9f9f9;
        }

        @media screen and (max-width: 992px) {
            .login .form {
                width: 100vw;
            }
        }

        .login .form .steps {
            margin-left: auto;
            margin-right: 20px;
            margin-top: 20px;
            height: 30px;
        }

        .login .form .steps .step {
            font-size: 11px;
            font-weight: bold;
            line-height: 30px;
            margin-right: 7px;
        }

        .login .form .steps .ball {
            width: 5px;
            height: 5px;
            background-color: #ccc;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        .login .form .formHead {
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            margin-top: 105px;
        }

        .login .form .formHead h2 {
            margin-bottom: 2rem;
        }

        .login .form .formHead p {
            font-size: 13px;
            margin-bottom: 1rem;
        }

        .login .form form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .login .form form .input-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
        }

        .login .form form .input-container input {
            padding: 10px;
            background-color: #f9f9f9 !important;
            margin-top: 1rem;
            border-radius: 3px;
            outline: none;
            border: 1px solid #dcdcdc;
        }

        .login .form form .input-container input:last-of-type {
            margin-bottom: 0.5rem;
        }

        .login .form form .input-container .top {
            position: absolute;
            top: 10px;
            left: 9px;
            color: #969696;
            font-size: 11.4px;
            background-color: #f9f9f9;
            padding-left: 2px;
            padding-right: 2px;
            visibility: hidden;
        }

        .login .form form .input-container img {
            position: absolute;
            top: 30px;
            right: 10px;
            cursor: pointer;
        }

        .login .form form .select {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
        }

        .login .form form .select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 10px;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 3px;
            border: 1px solid #dcdcdc;
            color: #5f5e5e;
            background-color: #f9f9f9;
            overflow: hidden;
            background: transparent;
        }

        .login .form form .select img {
            position: absolute;
            top: 30px;
            right: 10px;
            z-index: -1;
        }

        .login .form form small {
            color: #5f5e5e;
            font-size: 10PX;
        }

        .login .form form button {
            padding: 10px;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border: 1px solid transparent;
            font-size: 11px;
            color: #5f5e5e;
            cursor: pointer;
            background-color: #ededed;
            border-radius: 3px;
        }

        .login .form .agree {
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            font-size: 12.2px;
            line-height: 20px;
        }

        .login .blue {
            height: 100vh;
            background-color: #296efa;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-family: sans-serif;
            font-weight: 400;
        }

        @media screen and (max-width: 992px) {
            .login .blue {
                display: none;
            }
        }

        .login .blue h2 {
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
            margin-bottom: 50px;
        }

        .login .blue p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-item-align: center;
            align-self: center;
            color: #e7eef0;
            font-size: 15px;
            line-height: 24px;
            font-weight: 500;
        }

        .error {
            border: 1px solid #e00 !important;
        }

        .errorMessage {
            color: #e00 !important;
            margin-top: 10px;
            text-align: left;
        }

        .show {
            visibility: visible !important;
            display: block !important;
        }

        .redTop {
            color: #e00 !important;
        }

        .emailerror {
            color: #e00 !important;
            text-align: left;
            font-size: 11px;
            display: none;
        }

        .selecterror {
            color: #e00 !important;
            text-align: left;
            font-size: 11px;
            display: none;
        }

        .buttonOk {
            color: #fff !important;
            background-color: #296efa !important;
        }

        .activeBall {
            background-color: #000 !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -webkit-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -o-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -moz-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
        }
    </style>
    ";
    }

    // line 302
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 303
        echo "    <div id=\"banner-primary\">
        <div class=\"login\">
            <!--Form side-->
            <div class=\"form\">
                <div class=\"steps\">
                    <span class=\"step\">Step 1 of 3</span>
                    <span class=\"ball activeBall\"></span>
                    <span class=\"ball\"></span>
                    <span class=\"ball\"></span>
                </div>
                <div class=\"formHead\">
                    <h2>Let's set up your account</h2>
                    <p>Already have an account? <a>Sign in</a></p>
                </div>

                <form name=\"form\" novalidate>
                    <div class=\"input-container\">
                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your name\" onfocus=\"focusInput(event)\" />
                        <span class=\"top\" id=\"nametop\">Your name</span>
                    </div>
                    <div class=\"input-container\">
                        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email address\"
                            onfocus=\"focusInput(event)\" />
                        <span class=\"top\" id=\"emailtop\">Email address</span>
                        <span class=\"emailerror\" id=\"emailerror\">Please enter a valid email address</span>
                    </div>
                    <div class=\"select\">
                        <select id=\"select\" name=\"select\">
                            <option value=\"description\" disabled selected>
                                I would describe my user type as
                            </option>
                            <option value=\"developer\">Developer</option>
                            <option value=\"designer\">Desner</option>
                            <option value=\"marketing\">Markigeter</option>
                        </select>
                        <span class=\"selecterror\" id=\"\"> Please select your field </span>
                    </div>

                    <div class=\"input-container\">
                        <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Password\"
                            onfocus=\"focusInput(event)\" />
                        <small id=\"eight\">Minimum 8 charachters</small>
                        <span class=\"top\" id=\"passwordtop\">Password</span>
                        <span class=\"mif-key\" id=\"eye\"></span>
                    </div>

                    <button id=\"button\" type=\"submit\">Next</button>
                </form>
                <span class=\"agree\">By clicking the 'Next' button, you agree to creating a free
                    account, and to <a>Terms of Service </a> and
                    <a>Privacy Policy</a></span>
            </div>

            <!--Introduction side-->
            <div class=\"blue\">
                <h2>Dummy Heading</h2>
                <p>
                    Lorem ipsum, dolor sit amet, consectetur <br />
                    adipisicing elit, sed do eiusmod tempor <br />
                    incididunt ut labore et dolore magna <br />
                    aliqua.
                </p>
            </div>
        </div>
    </div>
    ";
    }

    // line 370
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "    <script>
        let form = document.querySelector('form');
        let name = document.form.name;
        let password = document.form.password;
        let email = document.form.email;
        let select = document.form.select;
        let inputs = document.querySelectorAll('input');
        let topSpan = document.querySelectorAll('.top');
        let eight = document.getElementById('eight');
        let emailError = document.getElementById('emailerror');
        let passWordCondition = false;
        let nameCondition = false;
        let emailCondition = false;
        let button = document.getElementById('button');

        //submit Form
        form.addEventListener('submit', (event) => {

            event.preventDefault();
            checkInput();
            //pass form
            if (emailCondition && nameCondition && passWordCondition) {
                button.classList.add('buttonOk')
            } else {
                button.classList.remove('buttonOk')

            }
        })

        //input check 
        function checkInput() {

            //check name
            if (name.value.trim() === '' || name.value.trim() === null) {
                name.classList.add('error');
                topSpan[0].classList.add('redTop');
                nameCondition = false;


            } else {
                name.classList.remove('error');
                topSpan[0].classList.remove('redTop');
                nameCondition = true;
            }

            //check password

            if (password.value.trim() === '' || password.value.trim() === null) {
                password.classList.add('error');
                passWordCondition = false;
            }
            if (password.value.length < 8) {
                topSpan[2].classList.add('redTop');
                password.classList.add('error');
                eight.classList.add('redTop');
                passWordCondition = false;

            } else {
                topSpan[2].classList.remove('redTop');
                password.classList.remove('error');
                eight.classList.remove('redTop');
                passWordCondition = true;
            }

            //check email

            if (email.value.trim() === '' || email.value.trim() === null) {
                email.classList.add('error');
                topSpan[1].classList.add('redTop');
                emailError.classList.add('show');
                emailCondition = false;

            } else {
                emailCondition = true;
            }
            if (!isEmail(email.value)) {
                email.classList.add('error');
                topSpan[1].classList.add('redTop');
                emailError.classList.add('show')
            } else {
                emailCondition = true;
            }

        }


        //focus function

        function focusInput(event) {
            let parent = event.target.parentElement;
            let spanTop = document.getElementById(`\${event.target.name}top`)
            let maniPlaceholder = event.target.placeholder;
            spanTop.classList.add('show');
            event.target.removeAttribute('placeholder');

            event.target.addEventListener('blur', () => {
                if (event.target.value.length === 0) {
                    spanTop.classList.remove('show');
                    event.target.setAttribute('placeholder', maniPlaceholder);
                }
            })

        }

        //remove warnings
        name.addEventListener('input', () => {
            removeWarnings();

        })
        password.addEventListener('input', () => {
            removeWarnings();

        })
        email.addEventListener('input', () => {
            removeWarnings();

        })

        function removeWarnings() {
            if (name.value.length > 3) {
                name.classList.remove('error');
                topSpan[0].classList.remove('redTop');
                nameCondition = true;
            } else {
                nameCondition = false;

            }

            if (password.value.length > 8) {
                topSpan[2].classList.remove('redTop');
                password.classList.remove('error');
                eight.classList.remove('redTop');
                passWordCondition = true;

            } else {
                passWordCondition = false;

            }

            if (isEmail(email.value)) {
                email.classList.remove('error');
                topSpan[1].classList.remove('redTop');
                emailError.classList.remove('show')
                emailCondition = true;

            } else {
                emailCondition = false;

            }

            if (emailCondition && nameCondition && passWordCondition) {
                button.classList.add('buttonOk')
            } else {
                button.classList.remove('buttonOk')

            }

        }
        //check email
        function isEmail(emailValue) {
            return /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/.test(emailValue);
        }

        //show password

        let eye = document.getElementById('eye');
        eye.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text'
            } else {
                password.type = 'password'

            }
        })

        //show selection List

        let downArrow = document.getElementById('downarrow');
        downArrow.addEventListener('click', () => {
            select.open = true;

        })
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  454 => 371,  450 => 370,  381 => 303,  377 => 302,  84 => 12,  77 => 8,  71 => 555,  69 => 370,  66 => 369,  64 => 302,  59 => 299,  57 => 12,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>{% block title %}Hello!{% endblock %} | Focus</title>
    <link rel=\"stylesheet\" href=\"https://necolas.github.io/normalize.css/8.0.1/normalize.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css\" />
    <link rel=\"stylesheet\" href=\"http://localhost:8010/public/css/main.css\" />
    {% block css %}<style>
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        a {
            color: #296efa;
            cursor: pointer;
        }

        .login {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: 3fr 1.5fr;
            grid-template-columns: 3fr 1.5fr;
        }

        .login .form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #f9f9f9;
        }

        @media screen and (max-width: 992px) {
            .login .form {
                width: 100vw;
            }
        }

        .login .form .steps {
            margin-left: auto;
            margin-right: 20px;
            margin-top: 20px;
            height: 30px;
        }

        .login .form .steps .step {
            font-size: 11px;
            font-weight: bold;
            line-height: 30px;
            margin-right: 7px;
        }

        .login .form .steps .ball {
            width: 5px;
            height: 5px;
            background-color: #ccc;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        .login .form .formHead {
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            margin-top: 105px;
        }

        .login .form .formHead h2 {
            margin-bottom: 2rem;
        }

        .login .form .formHead p {
            font-size: 13px;
            margin-bottom: 1rem;
        }

        .login .form form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .login .form form .input-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
        }

        .login .form form .input-container input {
            padding: 10px;
            background-color: #f9f9f9 !important;
            margin-top: 1rem;
            border-radius: 3px;
            outline: none;
            border: 1px solid #dcdcdc;
        }

        .login .form form .input-container input:last-of-type {
            margin-bottom: 0.5rem;
        }

        .login .form form .input-container .top {
            position: absolute;
            top: 10px;
            left: 9px;
            color: #969696;
            font-size: 11.4px;
            background-color: #f9f9f9;
            padding-left: 2px;
            padding-right: 2px;
            visibility: hidden;
        }

        .login .form form .input-container img {
            position: absolute;
            top: 30px;
            right: 10px;
            cursor: pointer;
        }

        .login .form form .select {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
        }

        .login .form form .select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 10px;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 3px;
            border: 1px solid #dcdcdc;
            color: #5f5e5e;
            background-color: #f9f9f9;
            overflow: hidden;
            background: transparent;
        }

        .login .form form .select img {
            position: absolute;
            top: 30px;
            right: 10px;
            z-index: -1;
        }

        .login .form form small {
            color: #5f5e5e;
            font-size: 10PX;
        }

        .login .form form button {
            padding: 10px;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border: 1px solid transparent;
            font-size: 11px;
            color: #5f5e5e;
            cursor: pointer;
            background-color: #ededed;
            border-radius: 3px;
        }

        .login .form .agree {
            margin-left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            font-size: 12.2px;
            line-height: 20px;
        }

        .login .blue {
            height: 100vh;
            background-color: #296efa;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-family: sans-serif;
            font-weight: 400;
        }

        @media screen and (max-width: 992px) {
            .login .blue {
                display: none;
            }
        }

        .login .blue h2 {
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center;
            margin-bottom: 50px;
        }

        .login .blue p {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-item-align: center;
            align-self: center;
            color: #e7eef0;
            font-size: 15px;
            line-height: 24px;
            font-weight: 500;
        }

        .error {
            border: 1px solid #e00 !important;
        }

        .errorMessage {
            color: #e00 !important;
            margin-top: 10px;
            text-align: left;
        }

        .show {
            visibility: visible !important;
            display: block !important;
        }

        .redTop {
            color: #e00 !important;
        }

        .emailerror {
            color: #e00 !important;
            text-align: left;
            font-size: 11px;
            display: none;
        }

        .selecterror {
            color: #e00 !important;
            text-align: left;
            font-size: 11px;
            display: none;
        }

        .buttonOk {
            color: #fff !important;
            background-color: #296efa !important;
        }

        .activeBall {
            background-color: #000 !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -webkit-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -o-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
            -moz-box-shadow: 0 0 0 30px #f9f9f9 inset !important;
        }
    </style>
    {% endblock %}
</head>

<body>
    {% block body %}
    <div id=\"banner-primary\">
        <div class=\"login\">
            <!--Form side-->
            <div class=\"form\">
                <div class=\"steps\">
                    <span class=\"step\">Step 1 of 3</span>
                    <span class=\"ball activeBall\"></span>
                    <span class=\"ball\"></span>
                    <span class=\"ball\"></span>
                </div>
                <div class=\"formHead\">
                    <h2>Let's set up your account</h2>
                    <p>Already have an account? <a>Sign in</a></p>
                </div>

                <form name=\"form\" novalidate>
                    <div class=\"input-container\">
                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Your name\" onfocus=\"focusInput(event)\" />
                        <span class=\"top\" id=\"nametop\">Your name</span>
                    </div>
                    <div class=\"input-container\">
                        <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email address\"
                            onfocus=\"focusInput(event)\" />
                        <span class=\"top\" id=\"emailtop\">Email address</span>
                        <span class=\"emailerror\" id=\"emailerror\">Please enter a valid email address</span>
                    </div>
                    <div class=\"select\">
                        <select id=\"select\" name=\"select\">
                            <option value=\"description\" disabled selected>
                                I would describe my user type as
                            </option>
                            <option value=\"developer\">Developer</option>
                            <option value=\"designer\">Desner</option>
                            <option value=\"marketing\">Markigeter</option>
                        </select>
                        <span class=\"selecterror\" id=\"\"> Please select your field </span>
                    </div>

                    <div class=\"input-container\">
                        <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Password\"
                            onfocus=\"focusInput(event)\" />
                        <small id=\"eight\">Minimum 8 charachters</small>
                        <span class=\"top\" id=\"passwordtop\">Password</span>
                        <span class=\"mif-key\" id=\"eye\"></span>
                    </div>

                    <button id=\"button\" type=\"submit\">Next</button>
                </form>
                <span class=\"agree\">By clicking the 'Next' button, you agree to creating a free
                    account, and to <a>Terms of Service </a> and
                    <a>Privacy Policy</a></span>
            </div>

            <!--Introduction side-->
            <div class=\"blue\">
                <h2>Dummy Heading</h2>
                <p>
                    Lorem ipsum, dolor sit amet, consectetur <br />
                    adipisicing elit, sed do eiusmod tempor <br />
                    incididunt ut labore et dolore magna <br />
                    aliqua.
                </p>
            </div>
        </div>
    </div>
    {% endblock %}
    <script src=\"https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js\"></script>
    {% block js %}
    <script>
        let form = document.querySelector('form');
        let name = document.form.name;
        let password = document.form.password;
        let email = document.form.email;
        let select = document.form.select;
        let inputs = document.querySelectorAll('input');
        let topSpan = document.querySelectorAll('.top');
        let eight = document.getElementById('eight');
        let emailError = document.getElementById('emailerror');
        let passWordCondition = false;
        let nameCondition = false;
        let emailCondition = false;
        let button = document.getElementById('button');

        //submit Form
        form.addEventListener('submit', (event) => {

            event.preventDefault();
            checkInput();
            //pass form
            if (emailCondition && nameCondition && passWordCondition) {
                button.classList.add('buttonOk')
            } else {
                button.classList.remove('buttonOk')

            }
        })

        //input check 
        function checkInput() {

            //check name
            if (name.value.trim() === '' || name.value.trim() === null) {
                name.classList.add('error');
                topSpan[0].classList.add('redTop');
                nameCondition = false;


            } else {
                name.classList.remove('error');
                topSpan[0].classList.remove('redTop');
                nameCondition = true;
            }

            //check password

            if (password.value.trim() === '' || password.value.trim() === null) {
                password.classList.add('error');
                passWordCondition = false;
            }
            if (password.value.length < 8) {
                topSpan[2].classList.add('redTop');
                password.classList.add('error');
                eight.classList.add('redTop');
                passWordCondition = false;

            } else {
                topSpan[2].classList.remove('redTop');
                password.classList.remove('error');
                eight.classList.remove('redTop');
                passWordCondition = true;
            }

            //check email

            if (email.value.trim() === '' || email.value.trim() === null) {
                email.classList.add('error');
                topSpan[1].classList.add('redTop');
                emailError.classList.add('show');
                emailCondition = false;

            } else {
                emailCondition = true;
            }
            if (!isEmail(email.value)) {
                email.classList.add('error');
                topSpan[1].classList.add('redTop');
                emailError.classList.add('show')
            } else {
                emailCondition = true;
            }

        }


        //focus function

        function focusInput(event) {
            let parent = event.target.parentElement;
            let spanTop = document.getElementById(`\${event.target.name}top`)
            let maniPlaceholder = event.target.placeholder;
            spanTop.classList.add('show');
            event.target.removeAttribute('placeholder');

            event.target.addEventListener('blur', () => {
                if (event.target.value.length === 0) {
                    spanTop.classList.remove('show');
                    event.target.setAttribute('placeholder', maniPlaceholder);
                }
            })

        }

        //remove warnings
        name.addEventListener('input', () => {
            removeWarnings();

        })
        password.addEventListener('input', () => {
            removeWarnings();

        })
        email.addEventListener('input', () => {
            removeWarnings();

        })

        function removeWarnings() {
            if (name.value.length > 3) {
                name.classList.remove('error');
                topSpan[0].classList.remove('redTop');
                nameCondition = true;
            } else {
                nameCondition = false;

            }

            if (password.value.length > 8) {
                topSpan[2].classList.remove('redTop');
                password.classList.remove('error');
                eight.classList.remove('redTop');
                passWordCondition = true;

            } else {
                passWordCondition = false;

            }

            if (isEmail(email.value)) {
                email.classList.remove('error');
                topSpan[1].classList.remove('redTop');
                emailError.classList.remove('show')
                emailCondition = true;

            } else {
                emailCondition = false;

            }

            if (emailCondition && nameCondition && passWordCondition) {
                button.classList.add('buttonOk')
            } else {
                button.classList.remove('buttonOk')

            }

        }
        //check email
        function isEmail(emailValue) {
            return /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/.test(emailValue);
        }

        //show password

        let eye = document.getElementById('eye');
        eye.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text'
            } else {
                password.type = 'password'

            }
        })

        //show selection List

        let downArrow = document.getElementById('downarrow');
        downArrow.addEventListener('click', () => {
            select.open = true;

        })
    </script>
    {% endblock %}
</body>

</html>", "template.html.twig", "C:\\Users\\famil\\Documents\\GitHub\\focus\\views\\template.html.twig");
    }
}
