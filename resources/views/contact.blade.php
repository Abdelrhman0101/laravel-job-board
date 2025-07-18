<x-layout :pageTitle="$pageTitle">
    <form action="/contact" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>   
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
    <p>Thank you for reaching out to us!</p>
    <p>We will get back to you as soon as possible.</p>
    <p>If you have any questions, feel free to contact us at <a href="mailto:abdalrhman0mahmoud1@gmail.com"> Mail Us</a>.</p>  
</x-layout>