<form method="post" action="/posts/new">
    @csrf
    <!--form has specific methods to inform the browser which http method to use to send the form content-->
    <!-- action is used to tell the browser where to send the data-->
    <label>
        Type your text
    </label>
    <input type="text" name="typedText" />
    <button type="submit">Submit</button>
</form>