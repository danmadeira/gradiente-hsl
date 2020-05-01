## Gradiente no espaço de cores HSL

Script em PHP para criação de uma imagem PNG formada por um gradiente de cores no espaço HSL (hue, saturation, lightness).

O espaço de cor hue/saturation/lightness, ou, matiz/saturação/brilho, é um sistema de colorimetria para dimensionar uma cor por estas três propriedades. No HSL, o matiz é a cor pura numericamente ordenada em um círculo de cores de 360°. A saturação é o grau de pureza da cor pela mesclagem do matiz com a cor cinza, em uma escala de 0% (cinza) à 100% (pura). O brilho é a claridade da cor graduada do completamente enegrecido em 0% ao completamente embranquecido em 100%.

Este algoritmo em PHP projeta todos os 360 valores da matiz, com os valores para saturação e brilho fornecidos opcionalmente por variável externa obtida pelo método GET. Os valores em HSL são convertidos em RGB para compor a imagem PNG. A conversão utiliza as funções deste repositório: [Conversão de espaço de cores RGB-HSL](https://github.com/danmadeira/conversao-rgb-hsl)

### Exemplo da imagem gerada:

![Senoide](img/hsl.png?raw=true)

