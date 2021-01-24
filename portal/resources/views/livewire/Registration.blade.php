<table style="width: 500px; background-color: black; padding: 4px;">
    <form>
        <tr>
            <td class=e>
                <div class="pl-1 pr-1">
                    <span class="d-block pt-2 pb-2">
                        Creating an account for Open RuneScape Classic is a simple process.
                    </span>
                    <span class="d-block pt-2 pb-2">
                        To begin you must first select a username. Once you have found a username that
                        you like and is not already taken, you will be asked to choose a password.
                    </span>
                    <span class="d-block pt-2 pb-2">
                        Usernames can be a maximum of 12 characters long and may contain letters, numbers
                        and underscores. When playing Open RuneScape Classic, underscores in usernames are translated
                        into spaces and first letters are capitalised. For example the username
                        red_rooster would appear as Red Rooster.
                    </span>
                    <span class="d-block pt-2 pb-2">
                        Passwords most be between 5 and 20 characters long. We recommend you use a mixture of numbers and
                        letters in your password to make it hard for someone to guess. We also suggest to avoid reusing passwords from other games here.
                    </span>
                    <div class="pt-2"></div>
                    <center>
                        <table>
                            <tr>
                                <td>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="text-right">
                                                Desired Username:
                                            </td>
                                            <td>
                                                <label class="pl-1">
                                                    <input wire:model.lazy="username" aria-label="Username"
                                                           type="text" required class="text-dark focus:z-10">
                                                    @error('username')
                                                    <p class="text-sm text-red-500 text-center">{{$message}}</p>
                                                    @enderror
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Desired Password:
                                            </td>
                                            <td>
                                                <label class="pl-1">
                                                    <input wire:model.lazy="password" aria-label="Password"
                                                           type="password" required class="text-dark focus:z-10">
                                                    @error('password')
                                                    <p class="text-sm text-red-500 text-center">{{$message}}</p>
                                                    @enderror
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Confirm Password:
                                            </td>
                                            <td>
                                                <label class="pl-1">
                                                    <input wire:model.lazy="passwordConfirmation" aria-label="Password"
                                                           type="password" required class="text-dark focus:z-10">
                                                    @error('password')
                                                    <p class="text-sm text-red-500 text-center">{{$message}}</p>
                                                    @enderror
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                Email Address:
                                            </td>
                                            <td>
                                                <label class="pl-1">
                                                    <input wire:model.lazy="email" aria-label="Email" name="email"
                                                           type="email" required class="text-dark focus:z-10">
                                                    @error('email')
                                                    <p class="text-sm text-red-500 text-center">{{$message}}</p>
                                                    @enderror
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <label class="pl-1">
                                                    <input style="color: black; width: 110px;" type=submit value="Create Account"
                                                           wire:click.prevent="registerStore">
                                                    <input type="hidden" name="remember" value="true">
                                                </label>
                                                <div class="pt-2"></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </center>
                </div>
            </td>
        </tr>
    </form>
</table>