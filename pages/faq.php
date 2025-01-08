<?php 
if (!isset($basePath)) {
    $basePath = '..';
}
include('../header.php'); ?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>FAQ</title>
</head>
<body>


  <div class="faq-container">
  
  <div class="faq-item">
            <h3>Can I take someone with me?</h3>
            <p>
                No, unfortunately due to safety instructions, only people with a visitor's pass can enter. This event is only for students.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I sign up for an internship at the internship market?</h3>
            <p>
                You can talk to our hiring managers who will possibly match you with an internship assignment. Discuss with them how you can apply 
                and/or how to keep in touch about the internship.
            </p>
        </div>

        <div class="faq-item">
            <h3>I already know I want to do my internship at KLM, is the market still helpful?</h3>
            <p>
                The market is still helpful because you have the opportunity to meet the hiring manager who might supervise you or conduct your interview.
            </p>
        </div>

        <div class="faq-item">
            <h3>What can I do at the internship market?</h3>
            <p>
                Talk to our hiring managers about internship possibilities at KLM E&M and attend fun activities.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is the event also online?</h3>
            <p>No, only in real life.</p>
        </div>

        <div class="faq-item">
            <h3>I lost my passport/ID, what should I do?</h3>
            <p>
                Without a valid ID or passport, you can't enter the area where the internship market is held.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is it possible for someone to drop me off/pick me up?</h3>
            <p>
                Yes, in front of the gate there is a possibility to drop you off and pick you up. From there you can walk to the event building.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is there another date to join the internship market?</h3>
            <p>No, the internship market is held only once before every internship period.</p>
        </div>

        <div class="faq-item">
            <h3>I am sick, but I still want an internship at KLM, what should I do?</h3>
            <p>
                Hope you feel better soon! Check our job site for available internships. Go to 
                <a href="https://careers.klm.com/" target="_blank">careers.klm.com</a>: click on ‘Vacatures’/‘Jobs’ at the top, click ‘Meer filters +’/’More filters +’, 
                at ‘Contract-type’/’Employment type’ select ‘Stage’/’Internship’. Keep checking this site as it is updated weekly.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is it possible to leave earlier?</h3>
            <p>
                Preferably not. We made a program for the internship market for which we count on your presence.
            </p>
        </div>

        <div class="faq-item">
            <h3>I am looking for a job, is the market also interesting for me?</h3>
            <p>
                No, this event is specifically for students seeking internships. If you are looking for a job, please visit 
                <a href="https://careers.klm.com/" target="_blank">careers.klm.com</a>.
            </p>
        </div>

        <div class="faq-item">
            <h3>What do I need my passport for?</h3>
            <p>
                The buildings of KLM E&M are in a secured location. You can only enter with a visitor's pass. Show your passport/ID at the gate to receive the pass.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I come with my car?</h3>
            <p>
                Yes, you can. You can park your car in the parking garage of Hangar 14. See the ‘MAP’ for directions.
            </p>
        </div>

        <div class="faq-item">
            <h3>I’m looking for an internship that starts September 2025 or later. Is this event useful for me?</h3>
            <p>
                This internship market is only for internships starting in/around February 2025. Let us know if you want to come to the E&M internship market 
                for a later period by sending an email to 
                <a href="mailto:stagesem@klm.com">stagesem@klm.com</a>. Mention in what period you want/have to do your internship.
            </p>
        </div>

  </div>

  <script>
    const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
  const question = item.querySelector('.faq-question');
  const answer = item.querySelector('.faq-answer');
  const arrow = item.querySelector('.arrow');

  question.addEventListener('click', () => {
    const isOpen = answer.classList.contains('open');

    // Close all open answers
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
    document.querySelectorAll('.arrow').forEach(a => a.classList.remove('open'));

    // Toggle current item
    if (!isOpen) {
      answer.classList.add('open');
      arrow.classList.add('open');
    }
  });
});
</script>



</body>
</html>

<script>
    const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
  const question = item.querySelector('.faq-question');
  const answer = item.querySelector('.faq-answer');
  const arrow = item.querySelector('.arrow');

  question.addEventListener('click', () => {
    const isOpen = answer.classList.contains('open');

    // Close all open answers
    document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
    document.querySelectorAll('.arrow').forEach(a => a.classList.remove('open'));

    // Toggle current item
    if (!isOpen) {
      answer.classList.add('open');
      arrow.classList.add('open');
    }
  });
});
</script>


<?php include('../footer.php'); ?>
