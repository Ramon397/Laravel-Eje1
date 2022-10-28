<label>
    Title<br>
        
    <input name="title" type="text"  value="{{ old('title',$post->title)  }}" >
        @error('title')
        <br>
        <small style=" color: red">{{ $message }}</small>
        @enderror
</label> <br>       
<label>
        Body<br>
        <input type="text" name="body"  value="{{ old('body',$post->body)  }}" >
        @error('body')
        <br>
        <small style=" color: red">{{ $message }}</small>
        @enderror    
</label><br>        