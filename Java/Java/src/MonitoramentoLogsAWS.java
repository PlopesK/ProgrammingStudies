import java.util.*;

public class MonitoramentoLogsAWS {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int quantidadeLogs = scanner.nextInt();
        scanner.nextLine();

        Map<String, Long> eventosPorServico = new HashMap<>();
        for (int i = 0; i < quantidadeLogs; i++) {
            String[] parts = scanner.nextLine().split(",");
            String servico = parts[1].trim();

            eventosPorServico.put(servico, eventosPorServico.getOrDefault(servico, 0L) + 1);
        }

        Optional<Map.Entry<String, Long>> maiorQuantidade = eventosPorServico.entrySet()
                .stream()
                .max(Map.Entry.comparingByValue());

        Optional<Map.Entry<String, Long>> menorQuantidade = eventosPorServico.entrySet()
                .stream()
                .min(Map.Entry.comparingByValue());

        System.out.println("Eventos por servico:");
        for (Map.Entry<String, Long> entry : eventosPorServico.entrySet()) {
            System.out.println(entry.getKey() + ":" + entry.getValue());
        }

        if (maiorQuantidade.isPresent() && menorQuantidade.isPresent()) {
            System.out.println("Maior:" + maiorQuantidade.get().getKey());
            System.out.println("Menor:" + menorQuantidade.get().getKey());
        }
    }
}
