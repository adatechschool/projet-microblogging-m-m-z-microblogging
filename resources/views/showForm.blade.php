<form method="post" action="/posts/new" enctype="multipart/form-data">
    <!--"enctype = tells your browser how it will send the data -->
    @csrf
    <!--form has specific methods to inform the browser which http method to use to send the form content-->
    <!-- action is used to tell the browser where to send the data-->
    <label>
        Type your text
    </label>
    <input type="text" name="typedText" />
    <button type="submit">Submit</button>
    <label for="imageToPost">Choose a picture:</label>
    <div>
        <input type="file" id="imageToPost" name="image" accept="image/png, image/jpeg" />
    </div>

</form>