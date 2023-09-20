import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

import java.time.LocalDate;

public class PessoaTeste {

    @Test
    void validarCalculoIdade() {
        Pessoa pessoa = new Pessoa("Ana Paula", LocalDate.of(2020, 1, 14));
        Assertions.assertEquals(2, pessoa.getIdade());
    }
}
