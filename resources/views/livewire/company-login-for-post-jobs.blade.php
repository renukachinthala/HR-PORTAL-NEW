<div>
    <style>
        .text-danger{
            font-size: 12px;
        }
    </style>
    <a href="/emplogin" style="text-decoration:none;margin-left:10px;
            font-family: Montserrat;background-color:rgb(2, 17, 79);color:white;padding:5px;border-radius:5px
        ">Back</a>
    <div class="card" style="width: 400px;padding:10px;margin-top:100px;margin-left:35%">
        <form>
            <div style="text-align: center;">
            <h5>HR Login</h5>
            </div>
            <div>
            </div>
            <div class="form-group">
                <label style="font-size:12px" for="companyId">HR Mail:</label><br>
                <input wire:model="contact_mail" style="font-size:12px" type="email" class="form-control">
                @error('contact_mail') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label style="font-size:12px" for="password">Password:</label><br>
                <input wire:model="password" style="font-size:12px" type="password" class="form-control">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <br>
            <div style="text-align: center;margin:0px">
                <button type="button" wire:click="login" style="font-size:12px;background-color:rgb(2, 17, 79);color:white">Login</button>
            </div>
        </form>
    </div>
    <div style="text-align: center;margin-top:10px"><h6 style="font-size: 12px;"><strong style="color: red;">NOTE : </strong>Before posting any job, company login is required.</h6></div>
</div>