import org.junit.jupiter.api.*;

import java.time.LocalDateTime;

public class ConsultarDadosDePessoaTeste {
    @BeforeAll
    static void configurarConexao() {
        BancoDeDados.iniciarConexao();
    }

    @BeforeEach
    void insereDadosParaTeste() {
        BancoDeDados.insereDados(new Pessoa("Carlos", LocalDateTime.of(2000, 2, 1, 13, 0, 0)));
    }

    @Test
    void validarDadosDeRetorno() {
        Assertions.assertTrue(true);
    }

    @Test
    void validarDadosDeRetorno2() {
        Assertions.assertNull(null);
    }

    @AfterEach
    void removeDadosTeste() {
        BancoDeDados.removeDados(new Pessoa("Carlos", LocalDateTime.of(2000, 2, 1, 13, 0, 0)));
    }

    @AfterAll
    static void finalizarConexao() {
        BancoDeDados.finalizarConexao();
    }
}
