# DSI31

Sistema de Control Vehicular para el curso de diseño y desarrollo de sistemas en internet impartido en la Universidad Autónoma de Querétaro.

Leer más en la [documentation](documentation)


|                | F (Vista) | I (Modelo) | I (Modelo) |
| -------------- | --------- | ---------- | ---------- |
|                | Enviar    | Recibir    | --INSERT-- |
| Licencias      | GET       | GET        | IMPLICITO  |
| Vehiculos      | GET       | GET        | IMPLICITO  |
| Multas         | GET       | REQUEST    | IMPLICITO  |
| Oficiales      | GET       | REQUEST    | IMPLICITO  |
| Verificaciones | POST      | REQUEST    | EXPLICITO  |
| Propietarios   | POST      | REQUEST    | EXPLICITO  |
| Tarjetas       | POST      | POST       | EXPLICITO  |
| Conductores    | POST      | POST       | EXPLICITO  |
