<x-layout.frontend.layout pageTitle="Account overview">
   <main class="container account-page">
      <section class="sidebar">
         <nav>
            <ul>
               <x-layout.frontend.nav-link-icon route="overview">
                  Overview
               </x-layout.frontend.nav-link-icon>
               <x-layout.frontend.nav-link-icon route="account" icon="user">
                  Account details
               </x-layout.frontend.nav-link-icon>
            </ul>
         </nav>
         <nav>
            <ul>
               <x-layout.frontend.nav-link-icon route="account" variant="ra" icon="archer">
                  Character overview
               </x-layout.frontend.nav-link-icon>
            </ul>
         </nav>
         <nav>
            <ul>
               <x-layout.frontend.nav-link-icon route="account" variant="ra" icon="skull">
                  Races
               </x-layout.frontend.nav-link-icon>
               <x-layout.frontend.nav-link-icon route="account" variant="ra" icon="crossed-swords">
                  Classes
               </x-layout.frontend.nav-link-icon>
               <x-layout.frontend.nav-link-icon route="account" variant="fa" icon="bolt">
                  Specializations
               </x-layout.frontend.nav-link-icon>
               <x-layout.frontend.nav-link-icon route="account" variant="fa" icon="book-skull">
                  Specializations
               </x-layout.frontend.nav-link-icon>
            </ul>
         </nav>
      </section>

      <section class="content">
         <div class="content-header">
            <h2>Account overview</h2>
         </div>

         <div class="content-main grid">
            <x-card class="account-details" title="Account details" url="#" label="Edit details">
               <table>
                  <td>Name</td>
                  <td>{{ auth()->user()->name }}</td>
               </table>
            </x-card>

            <x-card title="Account details" url="#" label="Edit details">
               Test
            </x-card>
         </div>

         <div class="content-main full-width">
            <x-card title="Characters overview" url="#" label="See all characters">
               Test
            </x-card>
         </div>
      </section>
   </main>
</x-layout.frontend.layout>
