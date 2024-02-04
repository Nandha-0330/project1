<a href="https://wa.me/+918438757683" class="whatsapp-icon" target="_blank">
    <img src="{{ asset("assets/whatsapp.png")}}" alt="WhatsApp Icon">
  </a>

  <style>
   .whatsapp-icon {
  position: fixed;
  right: 20px;
  bottom: 20px;
  z-index: 9999; /* Make sure it's on top of other elements */
  width: 50px; /* Adjust width */
  height: 50px; /* Adjust height */
  border-radius: 50%; /* Make it round */
  background-color: #25d366; /* WhatsApp green color */
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Add a shadow for depth */
  transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
}

.whatsapp-icon img {
  width: 70%; /* Adjust icon size */
  height: auto;
}

@media (max-width: 768px) {
  /* Adjust position for smaller screens */
  .whatsapp-icon {
    right: 10px;
    bottom: 10px;
  }
}


  </style>

