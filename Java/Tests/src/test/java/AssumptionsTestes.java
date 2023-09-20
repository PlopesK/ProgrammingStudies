import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Assumptions;
import org.junit.jupiter.api.Test;

public class AssumptionsTestes {

    @Test
    void validarAlgoSomenteNoUsuario() {
        Assumptions.assumeTrue("Omori Primo".equals(System.getenv("USER")));
        Assumptions.assumeFalse("root".equals(System.getenv("USER")));
        Assertions.assertEquals(10, 5 + 5);

    }
}
