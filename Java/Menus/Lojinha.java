import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Lojinha extends JFrame implements ActionListener
{
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	JPanel painelBotoes, painelCard, pM, p1, p2, p3, p4;
	
	JButton b1, b2, 
	bA, bB, bS, 
	btPainel1, btPainel2, btPainel3, btPainel4;
	
	JLabel labelMenu1, labelMenu2, label1, label2, label3, label4,
	FlabelC, FlabelN, FlabelCPF, FlabelCA, //Funcionário
	FFlabelC, FFlabelN, FFlabelPROD, FFlabelLOL,  //Fornecedor
	PlabelT, PlabelDESC, PlabelPR, PlabelQT,  //Produto
	VlabelC, VlabelFUN, VlabelPROD, VlabelDATA;  //Venda
	
	JTextField t1, t2, t3, t4,
	t5, t6, t7, t8,
	tA, tB, tC, tD,
	tE, tF, tG, tH;
	
	public static void main(String args[])
	{
		JFrame janela= new Lojinha();
		janela.setUndecorated(true);
		janela.getRootPane().setWindowDecorationStyle(JRootPane.FRAME);
		janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		janela.setVisible(true);
	}
	Lojinha()
	{
		setTitle("🛒 Lojinha 🛒");
		setBounds(250, 50, 480, 220);
		getContentPane().setLayout(new BorderLayout());		
		
		/* ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ Botões ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ */
		b1 = new JButton ("Cadastrar");	b2 = new JButton ("Cadastrar");	
		bA = new JButton ("Cadastrar");	bB = new JButton ("Cadastrar");	
		
		bS = new JButton ("Sair");
		
		/* ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ Labels Gerais ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ */
		labelMenu1 = new JLabel ("Bem-vindo(a)!", JLabel.CENTER);
		labelMenu2 = new JLabel ("Esse é o menu de cadastro! Aproveite!", JLabel.CENTER);
		label1 = new JLabel ("Cadastro de um Funcionário 👨‍💼", JLabel.CENTER);
		label2 = new JLabel ("Cadastro de um Fornecedor 📦", JLabel.CENTER);
		label3 = new JLabel ("Cadastro de um Produto 👜 ", JLabel.CENTER);
		label4 = new JLabel ("Cadastro de uma Venda 🏪", JLabel.CENTER);
		
		/* ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ Labels Funcionário e Fornecedor 👨‍💼 ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ */
		 //Apenas Funcionário
		FlabelC = new JLabel ("Código: ", JLabel.CENTER);
		FlabelN = new JLabel ("Nome: ", JLabel.CENTER);
		FlabelCPF = new JLabel ("CPF: ", JLabel.CENTER);
		FlabelCA = new JLabel ("Cargo: ", JLabel.CENTER);
		
		//Apenas Fornecedor
		FFlabelC = new JLabel ("Código: ", JLabel.CENTER);
		FFlabelN = new JLabel ("Nome: ", JLabel.CENTER);
		FFlabelPROD = new JLabel ("Produto: ", JLabel.CENTER);
		FFlabelLOL = new JLabel ("Local: ", JLabel.CENTER); 
		
		/* ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ TextFields ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ */
		t1 = new JTextField (20);			t5 = new JTextField (20);
		t2 = new JTextField (20);			t6 = new JTextField (20);
		t3 = new JTextField (20);			t7 = new JTextField (20);
		t4 = new JTextField (20);			t8 = new JTextField (20);
		
		/*-------------------------------------------------------------------------------------*/
		
		/* ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ Labels Produto e Venda 👜 ♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣♣ */
		 //Apenas Produto
		PlabelT = new JLabel ("Tipo: ", JLabel.CENTER);
		PlabelDESC = new JLabel ("Descrição: ", JLabel.CENTER);
		PlabelPR = new JLabel ("Preço: ", JLabel.CENTER);
		PlabelQT = new JLabel ("Quantidade: ", JLabel.CENTER);
		
		//Apenas Venda
		VlabelC = new JLabel ("Código: ", JLabel.CENTER);
		VlabelFUN = new JLabel ("Funcionário: ", JLabel.CENTER);
		VlabelPROD = new JLabel ("Produto: ", JLabel.CENTER);
		VlabelDATA = new JLabel ("Data: ", JLabel.CENTER); 
		
		/* ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ TextFields ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ */
		tA = new JTextField (20);			tE = new JTextField (20);
		tB = new JTextField (20);			tF = new JTextField (20);
		tC = new JTextField (20);			tG = new JTextField (20);
		tD = new JTextField (20);			tH = new JTextField (20);
		
		/*-------------------------------------------------------------------------------------*/
		
		/* ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ Painéis ♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠♠ */
		btPainel1 = new JButton ("Funcionário");
		btPainel1.addActionListener(this);
		btPainel2 = new JButton ("Fornecedor");
		btPainel2.addActionListener(this);
		btPainel3 = new JButton ("Produto");
		btPainel3.addActionListener(this);
		btPainel4 = new JButton ("Venda");
		btPainel4.addActionListener(this);
		
		painelCard = new JPanel();
		painelCard.setLayout (new CardLayout());
		painelBotoes = new JPanel();
		painelBotoes.setLayout (new GridLayout(1,3));
		
		/* ♦♦♦♦♦♦♦♦♦♦♦♦♦♦♦♦ Menu ♦♦♦♦♦♦♦♦♦♦♦♦♦♦♦♦ */
		pM = new JPanel();
		pM.setLayout(null);
		pM.add(labelMenu1); pM.add(labelMenu2);
		pM.add(bS);
		
		labelMenu1.setBounds(120, 10, 250, 20); //Tô especificando pra deixar mais bonitin
		labelMenu2.setBounds(120, 40, 250, 20);
		bS.setBounds(168, 120, 150, 20);
	
		/* ---------------------- Funcionário ---------------------- */
		p1 = new JPanel();
		p1.setLayout(null);
		p1.add(label1); 
		p1.add(FlabelC); p1.add(t1); 
		p1.add(FlabelN); p1.add(t2);
		p1.add(FlabelCPF); p1.add(t3);
		p1.add(FlabelCA); p1.add(t4);
		p1.add(b1);
		
		label1.setBounds(120, 10, 250, 20);
		FlabelC.setBounds(10, 40, 100, 20);
		t1.setBounds(85, 40, 150, 20);
		FlabelN.setBounds(230, 40, 100, 20);
		t2.setBounds(300, 40, 150, 20);
		FlabelCPF.setBounds(10, 80, 100, 20);
		t3.setBounds(85, 80, 150, 20);
		FlabelCA.setBounds(230, 80, 100, 20);
		t4.setBounds(300, 80, 150, 20);
		
		b1.setBounds(168, 120, 150, 20);
		
		/* ---------------------- Fornecedor ---------------------- */
		p2 = new JPanel();
		p2.setLayout(null);
		p2.add(label2); 
		p2.add(FFlabelC); p2.add(t5); 
		p2.add(FFlabelN); p2.add(t6);
		p2.add(FFlabelPROD); p2.add(t7);
		p2.add(FFlabelLOL); p2.add(t8);
		p2.add(b2);
		
		label2.setBounds(120, 10, 250, 20);
		FFlabelC.setBounds(10, 40, 100, 20);
		t5.setBounds(85, 40, 150, 20);
		FFlabelN.setBounds(230, 40, 100, 20);
		t6.setBounds(300, 40, 150, 20);
		FFlabelPROD.setBounds(10, 80, 100, 20);
		t7.setBounds(85, 80, 150, 20);
		FFlabelLOL.setBounds(230, 80, 100, 20);
		t8.setBounds(300, 80, 150, 20);
		
		b2.setBounds(168, 120, 150, 20);
		
		/* ---------------------- Produto ---------------------- */
		p3 = new JPanel();
		p3.setLayout(null);
		p3.add(label3); 
		p3.add(PlabelT); p3.add(tA); 
		p3.add(PlabelDESC); p3.add(tB);
		p3.add(PlabelPR); p3.add(tC);
		p3.add(PlabelQT); p3.add(tD);
		p3.add(bA);
		
		label3.setBounds(120, 10, 250, 20);
		PlabelT.setBounds(10, 40, 80, 20);
		tA.setBounds(75, 40, 120, 20);
		PlabelDESC.setBounds(245, 40, 80, 20);
		tB.setBounds(320, 40, 120, 20);
		PlabelPR.setBounds(5, 80, 80, 20);
		tC.setBounds(75, 80, 120, 20);
		PlabelQT.setBounds(230, 80, 100, 20);
		tD.setBounds(320, 80, 120, 20);
		
		bA.setBounds(168, 120, 150, 20);
		
		/* ---------------------- Venda ---------------------- */
		p4 = new JPanel();
		p4.setLayout(null);
		p4.add(label4); 
		p4.add(VlabelC); p4.add(tE); 
		p4.add(VlabelFUN); p4.add(tF);
		p4.add(VlabelPROD); p4.add(tG);
		p4.add(VlabelDATA); p4.add(tH);
		p4.add(bB);
		
		label4.setBounds(120, 10, 250, 20);
		VlabelC.setBounds(10, 40, 80, 20);
		tE.setBounds(75, 40, 120, 20);
		VlabelFUN.setBounds(245, 40, 80, 20);
		tF.setBounds(320, 40, 120, 20);
		VlabelPROD.setBounds(5, 80, 80, 20);
		tG.setBounds(75, 80, 120, 20);
		VlabelDATA.setBounds(250, 80, 100, 20);
		tH.setBounds(320, 80, 120, 20);
		
		bB.setBounds(168, 120, 150, 20);
		
		/* ---------------------- Painés Conclusão ---------------------- */
		painelBotoes.add(btPainel1);
		painelBotoes.add(btPainel2);
		painelBotoes.add(btPainel3);
		painelBotoes.add(btPainel4);
		painelCard.add(pM, "pM");
		painelCard.add(p1, "p1");
		painelCard.add(p2, "p2");
		painelCard.add(p3, "p3");
		painelCard.add(p4, "p4");
		getContentPane().add("North",painelBotoes);
		getContentPane().add("Center",painelCard);
	}
	
	public void actionPerformed(ActionEvent e)
	{
		CardLayout cl = (CardLayout) painelCard.getLayout();
		if (e.getSource() == btPainel1)  cl.show(painelCard, "p1");
		if (e.getSource() == btPainel2)  cl.show(painelCard, "p2");
		if (e.getSource() == btPainel3)  cl.show(painelCard, "p3");
		if (e.getSource() == btPainel4)  cl.show(painelCard, "p4");
	}
}