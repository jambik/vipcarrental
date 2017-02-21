<h2>Message has been sent from web-site</h2>

<p>Data from client</p>

{% if data.firstname %}<div>First name: {{ data.firstname }}</div>{% endif %}
{% if data.lastname %}<div>Last name: {{ data.lastname }}</div>{% endif %}
{% if data.telephone %}<div>Telephone: {{ data.telephone }}</div>{% endif %}
{% if data.email %}<div>Email: {{ data.email }}</div>{% endif %}

{% if data.message %}
<p>Message:<br>
-------------------<br>
{{ data.message }}
</p>
{% endif %}