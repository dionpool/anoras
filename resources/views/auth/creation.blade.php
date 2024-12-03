<x-layout.frontend.layout pageTitle="Account creation">
   <main class="authentication">
      <div class="auth-header">
         <h3>Sign up</h3>
         <span>Create your personal account</span>
      </div>

      <form action="#" method="POST" class="auth-form">
         @csrf

         <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
         </div>

         <div class="input-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail">
         </div>

         <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
         </div>

         <button type="submit" class="button button-primary">Create account</button>
      </form>

      <a href="{{ route('creation') }}" class="link create-account">Sign into your Anoras account</a>
   </main>
</x-layout.frontend.layout>
