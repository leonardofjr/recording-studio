<template>
<div id="contact">
        <h2>CONTACT INFO</h2>
        <p>Address: 188 Bur Oak Avenue<br>Markham, Ontario,<br>L6C-2M1,<br>Phone: 416-907-4697</p>
        <h2>HIT US UP</h2>
        <form method="POST" action="/contact">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="contactFormName" placeholder="Name" />
                </div>
                <div class="flash-message-contact-form-name alert alert-info d-none">
                    <span></span>
                </div>
                <div class= "form-group" >
                    <input class="form-control" type = "text" name = "contactFormEmail" placeholder = "Email Address" />
                </div >
                <div class="flash-message-contact-form-email alert alert-info d-none">
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" type="text" name="contactFormMessage" placeholder="Leave Your Message"></textarea>
                </div>
                <div class="flash-message-contact-form-message alert alert-info d-none">
                    <span></span>
                </div>
                <div class="px-3 text-right">
                    <button class="btn btn-primary" type="submit">Send</button>
                    <div class="flash-message-contact-form-success alert alert-info d-none">
                        <span>Your inquiry has been submitted</span>
                    </div>
                </div>
            </div>
        </div>
        </form>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
