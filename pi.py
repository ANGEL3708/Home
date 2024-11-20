import numpy as np
import plotly.graph_objects as go

# Definir las funciones
x_p = np.linspace(-7, 10, 500)
x_s = np.linspace(-1, 10, 500)
x_non_negative = np.linspace(0, 10, 500)

# Crear las trazas (curvas)
fig = go.Figure()

fig.add_trace(go.Scatter(x=x_p, y=np.sqrt(x_p + 7) - 1, mode='lines', name="f(x) = sqrt(x + 7) - 1 (P)"))
fig.add_trace(go.Scatter(x=x_non_negative, y=-np.sqrt(x_non_negative), mode='lines', name="f(x) = -sqrt(x) (Q)"))
fig.add_trace(go.Scatter(x=x_non_negative, y=-np.sqrt(x_non_negative) - 2, mode='lines', name="f(x) = -sqrt(x) - 2 (R)"))
fig.add_trace(go.Scatter(x=x_s, y=-np.sqrt(x_s + 1), mode='lines', name="f(x) = -sqrt(x + 1) (S)"))
fig.add_trace(go.Scatter(x=x_non_negative, y=3 - np.sqrt(x_non_negative), mode='lines', name="f(x) = 3 - sqrt(x) (T)"))

# Ajustar el diseño
fig.update_layout(
    title="Funciones P - T",
    xaxis_title="x",
    yaxis_title="f(x)",
    template="plotly_white",  # Estilo blanco para el fondo
    showlegend=True
)

# Mostrar el gráfico interactivo
fig.show()
