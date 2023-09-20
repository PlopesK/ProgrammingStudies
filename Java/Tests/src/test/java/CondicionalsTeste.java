import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Assumptions;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.condition.DisabledIfEnvironmentVariable;
import org.junit.jupiter.api.condition.EnabledForJreRange;
import org.junit.jupiter.api.condition.EnabledIfEnvironmentVariable;
import org.junit.jupiter.api.condition.JRE;

public class CondicionalsTeste {
    @Test
    @EnabledIfEnvironmentVariable(named = "USER", matches = "Omori Primo")
    void validarAlgoSomenteNoUsuario() {
        Assertions.assertEquals(10, 5 + 5);
    }

    @Test
    @EnabledForJreRange(min = JRE.JAVA_8, max = JRE.JAVA_17)
    void validarAlgoSomenteNaVersao() {
        Assertions.assertEquals(15, 5 + 5 + 5);
    }

    @Test
    @DisabledIfEnvironmentVariable(named = "USER", matches = "root")
    void desabilitarAlgoParaUsuario() {
        Assertions.assertEquals(20, 5 + 5 + 5 + 5);
    }
}
