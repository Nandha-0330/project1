<div class="body__inner">
    <div class="body__description">
        <h1>Instagram {{ $type }}</h1>
        <br>
        <p>DEMO is a unique Instagram platform where you can get followers on Instagram, fast and unlimited. Don't take our word for it, use form below to receive your fast, Instagram followers.</p>
    </div>
    <div class="body__imprint imprint-subscription-features">
        <div class="imprint-subscription-features__item">
            <div class="icon">
                <img src="img/human-outline.svg">
            </div>
            <p>Only real {{ $type }} from real Instagram users.</p>
        </div>
        <div class="imprint-subscription-features__item">
            <div class="icon">
                <img src="img/ -outline.svg">
            </div>
            <p>This service is absolutely   and can be used an unlimited amount of times.</p>
        </div>
    </div>
    <div class="body__card card-step card-select">
    <h2>Select your Instagram {{ $type }} package below:</h2>
    <div class="message message--red">
        <div class="message__title">
            <p></p>
            <img class="message__close" src="img/cross-black.svg" draggable="false" alt="Black X icon" />
        </div>
        <div class="message__body">
            <p></p>
        </div>
    </div>
<form action="">
    <div class="form">
        <div class="form__element form__element--with-left-icon form__element--select">
            <label for="package-select">Select package</label>
            <select id="package-select" name="package" >
                <option value="250">25 {{ $type }}</option>
                <option value="250">50 {{ $type }}</option>
                <option value="250">100 {{ $type }} </option>
                <option value="250">250 {{ $type }} </option>
                <option value="250">500 {{ $type }} </option>
            </select>
            <img class="form__element-icon" src="img/icon-dropdown-heart.svg" draggable="false" alt="Red heart icon">
        </div>
        <div class="form__element form__element--with-left-icon">
            <label for="username-input">Enter username</label>
            <input id="username-input" name="username" type="text" placeholder="Instagram Username">
            <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
        </div>
        <div class="form__element form__element--with-left-icon">
            <label for="username-input">Post URL:</label>
            <input id="username-input" type="text" name="url" placeholder="Instragram  URL">
            <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
        </div>
        <div class="form__element form__element--with-left-icon">
            <label for="username-input">Transaction ID::</label>
            <input id="username-input" type="text" name="transaction_id" placeholder=" Transaction ID">
            <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
        </div>
        <button class="large-button large-button--with-loader" onclick="_WT()">
            <p>Generate {{ $type }}</p>
        </button>
    </div>
</form>
</div>

