<div>
  <form action="<?= URL ?>clients/create1" method="POST">
    <label class="title" for="fname">First name</label>
    <input required type="text" name="client_firstname" placeholder="First name" autocomplete="off">
    <label class="title" for="fname">Last name</label>
    <input required type="text" name="client_lastname" placeholder="Last name" autocomplete="off">
    <label class="title" for="fname">Phone number</label>
    <input required type="text" name="phone_number" placeholder="Phone number" autocomplete="off">
    <label class="title" for="fname">E-mail</label>
    <input required type="text" name="E_mail" placeholder="E-mail" autocomplete="off">
    <input id="button" type="submit" value="Versturen">
  </form>
</div>
