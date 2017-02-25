<h2>Car Reservation has been sent from web-site</h2>

<h4>Car: {{ data.car }}</h4>

<div>Location & Date</div>
<div>------------------</div>
<div>Pick-Up Time: {{ data.pickup }}</div>
<div>Drop-Off Time: {{ data.dropoff }}</div>
<div>Pick-Up Location: {{ data.pickuplocation }}</div>
<div>Drop-Off Location: {{ data.dropofflocation }}</div>

<p>&nbsp;</p>

<div>PERSONAL INFORMATION</div>
<div>------------------</div>
{% if data.firstname %}<div>First name: {{ data.firstname }}</div>{% endif %}
{% if data.lastname %}<div>Last name: {{ data.lastname }}</div>{% endif %}
{% if data.age %}<div>Age: {{ data.age }}</div>{% endif %}
{% if data.phone %}<div>Telephone: {{ data.phone }}</div>{% endif %}
{% if data.email %}<div>Email: {{ data.email }}</div>{% endif %}
{% if data.country %}<div>Country: {{ data.country }}</div>{% endif %}
{% if data.address %}<div>Address: {{ data.address }}</div>{% endif %}
{% if data.city %}<div>City: {{ data.city }}</div>{% endif %}
{% if data.zip %}<div>Zip-code: {{ data.zip }}</div>{% endif %}