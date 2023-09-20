import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

import java.time.LocalDateTime;

public class PessoaTeste {

    @Test
    void deveCalcularIdadeCorretamente() {
        Pessoa jessica = new Pessoa("Jéssica", LocalDateTime.of(2000, 1, 1, 15, 0, 0));
        Assertions.assertEquals(23, jessica.getIdade());
        //Assert that 'Jessica' has 23 years old based on the currently time. (20/09/2023)
    }

    @Test
    void deveRetornarSeEhMaiorDeIdade() {
        Pessoa ana = new Pessoa("Ana Paula", LocalDateTime.of(2000, 1, 1, 15, 0, 0));
        Assertions.assertTrue(ana.ehMaiorDeIdade());

        Pessoa fernando = new Pessoa("Fernando", LocalDateTime.now());
        Assertions.assertFalse(fernando.ehMaiorDeIdade());
    }

    @Test
    void validaIgualdade() {
        Pessoa pessoa = new Pessoa("Pessoa 1", LocalDateTime.now());
        Assertions.assertSame(pessoa, pessoa);
    }
}
