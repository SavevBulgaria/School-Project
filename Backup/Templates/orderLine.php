<style>
  .navbar {
    display: flex;
    flex-direction: column; /* Changed flex-direction to column */
    justify-content: center;
    align-items: center;
    background-color: #232d27;
    padding: 0 15%;
    padding-bottom: 15px;
  }

  .navbar-text {
    color: white !important;
    font-weight: bold;
    font-size: 18px;
    margin-right: 10px;
  }

  .takeaway-button {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: orange;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 10px;
  }

  .takeaway-button a {
    color: white;
    font-size: 18px;
    text-decoration: none;
    margin-left: 5px;
  }

  @media (max-width: 600px) {
    .navbar {
      flex-direction: column;
    }
    .takeaway-button {
      margin-top: 10px;
    }
  }
</style>

<div class="navbar">
  <p class="navbar-text">Do not hesitate to order from home</p>
  <div class="takeaway-button">
    <a href="tel:+359896231041">Take away</a>
  </div>
</div>
