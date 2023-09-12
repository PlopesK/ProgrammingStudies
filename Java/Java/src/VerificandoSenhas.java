import java.util.Scanner;
import java.util.regex.Pattern;

public class VerificandoSenhas {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Digite a senha para verificar a força:");
        String senha = scanner.nextLine();
        //scanner.close();

        String resultado = verificarForcaSenha(senha);
        System.out.println(resultado);
    }

    public static String verificarForcaSenha(String senha) {
        int comprimentoMinimo = 8;
        String aviso;

        // Critérios de validação usando expressões regulares
        boolean temLetraMaiuscula = Pattern.compile("[A-Z]").matcher(senha).find();
        boolean temLetraMinuscula = Pattern.compile("[a-z]").matcher(senha).find();
        boolean temNumero = Pattern.compile("\\d").matcher(senha).find();
        boolean temCaractereEspecial = Pattern.compile("\\W").matcher(senha).find();
        boolean temSequenciaComum = senha.matches(".*(?i)123456.*|.*(?i)abcdef.*");
        boolean temPalavraComum = senha.equalsIgnoreCase("password") || senha.equalsIgnoreCase("123456") || senha.equalsIgnoreCase("qwerty");

        int forca = (temCaractereEspecial ? 1 : 0) + (temLetraMinuscula ? 1 : 0) + (temLetraMaiuscula ? 1 : 0) +
                (temSequenciaComum ? 0 : 1) + (temNumero ? 1 : 0) + (temPalavraComum ? 0 : 1) +
                ((senha.length() >= comprimentoMinimo) ? 1 : 0);

        if (forca >= 1 && forca <= 3) {
            aviso = "Senha fraca!";
        } else if (forca >= 4 && forca <= 5) {
            aviso = "Senha média!";
        } else if (forca >= 6) {
            aviso = "Senha forte!";
        } else {
            aviso = "Senha inválida!";
        }

        return aviso;
    }
}