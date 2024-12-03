<x-layout.frontend.layout pageTitle="Sign in">
   <main class="authentication">
      <div class="auth-header">
         <h3>Sign in</h3>
         <span>Log into your account</span>
      </div>

      <form action="#" method="POST" class="auth-form">
         @csrf

         <div class="input-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
         </div>

         <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
         </div>

         <button type="submit" class="button button-primary">Sign in</button>
      </form>

      <a href="{{ route('creation') }}" class="link create-account">Create a free Anoras account</a>
   </main>
</x-layout.frontend.layout>
