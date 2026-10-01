function redirectToEventPage() {
  alert("Signup successful! Redirecting to event page...");
  window.location.href = "events.php";
}
document.addEventListener("DOMContentLoaded", function () {
  const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
  popoverTriggerList.forEach(function (popoverTriggerEl) {
    new bootstrap.Popover(popoverTriggerEl);
  });
});
document.addEventListener('DOMContentLoaded', function () {
  const modalBody = document.getElementById('attendeesContent');
  document.querySelectorAll('.view-attendees-btn').forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-evnt-id');
      const content = document.getElementById(targetId)?.innerHTML || "<p>No data found.</p>";
      modalBody.innerHTML = content;
    });
  });
});