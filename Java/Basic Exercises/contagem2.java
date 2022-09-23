
public class contagem2
{
	public static void main (String args[])
	{
	Thread tempo;
	tempo = new Thread();
	tempo.start();
	int a=0, b=0;
	
		for (a=0; a<=10; a++)
		{
			System.out.println(a + "");
		}
		
		System.out.println();
		
		for (a=50; a>=0; a=a-5)
		{
			System.out.println(a + "");
		}
		
		System.out.println();
		
		for (a=10;a>=-10;a=a-2)
		{
			System.out.println(a + "");
			for (b=0;b<500;b++)
			{
				System.out.println();
				int h,m,s;
				System.out.println("Para encerrar o relógio pressione CTRL+C");
				for (h=0;h<24;h++)
				for (m=0;m<60;m++)
				for (s=0;s<60;s++)
				{
					System.out.println(h+ "h:" + m + "min:" + s + "s");
					try
					{
						Thread.sleep(1000);
						if (s==5)
						{
							System.exit(0);
						}
					}
					catch (InterruptedException erro)
					{
						//Tratamento de erro
					}
				}
			}
		}
	}

}
