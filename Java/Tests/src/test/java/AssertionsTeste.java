import org.junit.jupiter.api.Test;

import java.time.LocalDateTime;

import static org.junit.jupiter.api.Assertions.*;

public class AssertionsTeste {
    @Test
    void validarValoresDeOperacoes() {

        int resultado = 10;
        assertEquals(resultado, (5 + 5));

        double valor = 5.0;
        double outroValor = 5.0;
        assertEquals(valor, outroValor);
    }

    @Test
    void validarSeArraysSaoIguais() {

        int[] primeiroLancamento = {10, 20, 30, 40, 50};
        int[] segundoLancamento = {10, 20, 30, 40, 50};
        assertArrayEquals(primeiroLancamento, segundoLancamento);

        boolean[] flags = {true, false, false};
        assertArrayEquals(new boolean[]{true, false, false}, flags);

        double[] valores = {5.0, 10.5, 50D, 46d};
        assertArrayEquals(new double[]{5.0, 10.5, 50D, 46d}, valores);
    }

    @Test
    void validarSeObjetoEstaNuloOuNao() {

        Pessoa pessoa = null;
        assertNull(pessoa);

        pessoa = new Pessoa("Pedro", LocalDateTime.now());
        assertNotNull(pessoa);
    }

    @Test
    void validarNumerosDeTiposDiferentes() {

        double valor = 5.0;
        double outroValor = 5.0;

        assertEquals(valor, outroValor);
    }

    @Test
    void validarQueValoresSaoDiferentes(){

        int x = 5;
        int y = 6;

        assertNotEquals(5, 6);
    }

    @Test
    void validarQueAlgumaCondicaoEhFalsa() {

        boolean condicao = 5 + 6 == 12;

        assertFalse(condicao);
    }

    @Test
    void validarQueAlgumaCondicaoEhVerdadeira() {

        var condicao = 6 + 6 == 12;

        assertTrue(condicao);
    }
}
