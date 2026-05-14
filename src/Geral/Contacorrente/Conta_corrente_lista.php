<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Lista de contas correntes
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $descricao Descrição da conta corrente.
 * @pw_element string $codigo_banco Código do banco.<BR><BR>Pode ser:<BR><BR>001 - Banco do Brasil                         <BR>003 - Banco da Amazônia                       <BR>004 - Banco do Nordeste                       <BR>017 - BNY Mellon Banco S.A.                   <BR>021 - Banestes                                <BR>025 - Alfa                                    <BR>029 - Banerj                                  <BR>033 - Santander                               <BR>037 - Banpará                                 <BR>041 - Banrisul                                <BR>047 - Banese                                  <BR>069 - Banco Crefisa S.A.                      <BR>070 - BRB - Banco de Brasília                 <BR>077 - Banco Inter                             <BR>082 - Banco Topázio                           <BR>083 - China Brasil                            <BR>084 - Uniprime Norte do Paraná                <BR>085 - Ailos (Cecred)                          <BR>089 - Credisan                                <BR>090 - Unicred                                 <BR>091 - Unicred Central do Rio Grande do Sul    <BR>093 - PoloCred                                <BR>094 - Finaxis                                 <BR>095 - Confidence                              <BR>096 - Banco BM&F Bovespa                      <BR>097 - CrediSIS                                <BR>099 - Uniprime                                <BR>102 - XP Investimentos                        <BR>104 - Caixa Econômica Federal                 <BR>121 - Agiplan                                 <BR>124 - Woori Bank                              <BR>125 - Brasil Plural                           <BR>128 - MS Bank                                 <BR>132 - ICBC do Brasil                          <BR>133 - Cresol                                  <BR>136 - Centrais Unicreds                       <BR>147 - Rico                                    <BR>151 - Nossa Caixa                             <BR>177 - SC Guide                                <BR>197 - Stone                                   <BR>208 - BTG Pactual                             <BR>212 - Original                                <BR>213 - ARBI                                    <BR>218 - Banco Bonsucesso                        <BR>224 - Fibra                                   <BR>233 - Banco Cifra                             <BR>237 - Bradesco                                <BR>243 - Banco Máxima                            <BR>246 - Banco ABC Brasil                        <BR>250 - BCV - Banco de Crédito e Varejo         <BR>254 - ParanáBanco                             <BR>260 - Nubank                                  <BR>274 - BMP Money Plus                          <BR>278 - Geração Futuro                          <BR>279 - Primacredi                              <BR>280 - LiftBank                                <BR>290 - PagBank (PagSeguro)                     <BR>301 - BPP Instituição de Pagamento            <BR>318 - Banco BMG                               <BR>320 - BIC Banco Industrial e Comercial        <BR>323 - Mercado Pago                            <BR>329 - QI Tech                                 <BR>336 - C6 Bank                                 <BR>341 - Itaú Unibanco                           <BR>354 - Necton                                  <BR>364 - Gerencianet                             <BR>376 - J. P. Morgan                            <BR>389 - Banco Mercantil do Brasil               <BR>399 - HSBC Bank                               <BR>422 - Safra                                   <BR>453 - Banco Rural S.A.                        <BR>456 - Banco de Tokyo                          <BR>464 - Banco Sumitomo Mitsui Brasileiro        <BR>473 - Caixa Geral                             <BR>487 - Deutsche Bank                           <BR>505 - Credit Suisse                           <BR>600 - Banco Luso Brasileiro                   <BR>604 - Banco Industrial do Brasil              <BR>609 - Crebit                                  <BR>610 - Lucree                                  <BR>611 - Banco Paulista                          <BR>612 - Banco Guanabara                         <BR>613 - Omni Soluções Financeiras               <BR>623 - Banco Panamericano S.A.                 <BR>630 - Omie.CASH                               <BR>633 - Rendimento                              <BR>634 - Banco Triângulo S.A.                    <BR>637 - Sofisa                                  <BR>643 - Pine                                    <BR>644 - Wall Securitizadora                     <BR>646 - Wirecard                                <BR>647 - B-Link Securitizadora                   <BR>648 - Servicoop                               <BR>649 - Select Administradora de Bens           <BR>650 - SuperGet                                <BR>653 - Indusval                                <BR>654 - Banco Renner                            <BR>655 - Votorantim                              <BR>656 - DLM Invista                             <BR>657 - UnionPay                                <BR>658 - Zoop                                    <BR>659 - Flash Benefícios                        <BR>660 - Warren                                  <BR>661 - AvecPay                                 <BR>662 - WabiPay                                 <BR>663 - WabiPay                                 <BR>664 - Credit Partners                         <BR>665 - Millennium Bcp                          <BR>666 - Porto Seguro                            <BR>667 - Fidussia                                <BR>668 - Silicon Valley Bank                     <BR>669 - ArgosBank                               <BR>670 - Brasil Cash                             <BR>671 - Metal Credit Securitizadora             <BR>672 - FacilitaPay                             <BR>673 - Ceape                                   <BR>674 - CBH - Compagnie Bancaire Helvetique     <BR>675 - One7                                    <BR>676 - Griffin Capital S/A                     <BR>677 - Midas Securitizadora                    <BR>678 - PeixePay                                <BR>679 - InfinitePay                             <BR>680 - Lado Serviços de Cobrança               <BR>681 - Rodolfo Factoring                       <BR>682 - CR Factoring                            <BR>683 - Ben Benefícios                          <BR>684 - Loggi                                   <BR>685 - BRDE                                    <BR>686 - Cotação                                 <BR>687 - Olist                                   <BR>688 - Amazon                                  <BR>689 - Investcamp                              <BR>690 - SulBrasil                               <BR>691 - Seven Investimentos                     <BR>692 - Lotus                                   <BR>693 - Grupo Multiplica                        <BR>694 - Trevys Fidic                            <BR>696 - Valori Bank                             <BR>697 - Evo Pagamentos                          <BR>698 - Direct Cred                             <BR>699 - EngagED                                 <BR>700 - Finpet                                  <BR>707 - Banco Daycoval                          <BR>712 - Ourinvest                               <BR>719 - Banif                                   <BR>735 - Neon / Pottencial                       <BR>741 - Banco Ribeirão Preto                    <BR>743 - Banco Semear                            <BR>745 - Citibank S.A.                           <BR>746 - Banco Modal                             <BR>747 - Rabobank International Brasil           <BR>748 - Sicredi                                 <BR>752 - BNP Paribas                             <BR>755 - Bank of America Merrill Lynch           <BR>756 - Sicoob                                  <BR>772 - Gol Securitizadora                      <BR>773 - Centerin Fomento                        <BR>774 - Sals-Fac Factoring                      <BR>775 - Social Bank                             <BR>776 - Conta Simples                           <BR>777 - Credicard                               <BR>778 - Credicard                               <BR>779 - Banricard                               <BR>780 - Akirede                                 <BR>781 - Adiq                                    <BR>782 - A55                                     <BR>
 * @pw_element string $codigo_agencia Código da Agência
 * @pw_element string $conta_corrente Número da conta corrente.
 * @pw_element string $nome_gerente Nome do Gerente da Conta Corrente.
 * @pw_element string $tipo Tipo da Conta Corrente.<BR><BR>Pode ser:<BR>AC - Administradora de Cartões<BR>AD - Adiantamento<BR>CA - Conta Aplicação<BR>CC - Conta Corrente<BR>CE - Conta Empréstimo<BR>CG - Conta Garantida<BR>CN - Crediário / Carnê<BR>CP - Conta Poupança<BR>CR - Cartão de Crédito<BR>CV - Carteira Virtual<BR>CX - Caixinha<BR>MT - Mútuo<BR>PG - Conta de Pagamento
 * @pw_element string $tipo_comunicacao Tipo de comunicação&nbsp;
 * @pw_element string $cSincrAnalitica Sincroniza os Movimentos de Forma Análitica para o PDV
 * @pw_element integer $nTpTef Tipo de TEF
 * @pw_element decimal $nTaxaAdm Taxa da Administradora de Cartões
 * @pw_element integer $nDiasVenc Dias para vencimento
 * @pw_element integer $nNumParc Número máximo de parcelas do Cartão de Credito
 * @pw_element integer $nCodAdm Código da Administradora de Cartões
 * @pw_element string $cUtilPDV Utiliza a Conta Corrente no OmiePDV
 * @pw_element string $cCategoria Código da Categoria para o PDV.
 * @pw_element string $cModalidade Modalidade da Cobrança
 * @pw_element decimal $saldo_inicial Saldo Inicial da Conta Corrente
 * @pw_element string $saldo_data Data do Saldo Inicial da Conta Corrente
 * @pw_element decimal $valor_limite Valor do Limite do Crédito
 * @pw_element string $cTipoCartao Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
 * @pw_complex conta_corrente_lista
 */
class Conta_corrente_lista{
	/**
	 * Código da conta corrente no Omie.
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Código de Integração do Parceiro.
	 *
	 * @var string
	 */
	public string $cCodCCInt;
	/**
	 * Descrição da conta corrente.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Código do banco.<BR><BR>Pode ser:<BR><BR>001 - Banco do Brasil                         <BR>003 - Banco da Amazônia                       <BR>004 - Banco do Nordeste                       <BR>017 - BNY Mellon Banco S.A.                   <BR>021 - Banestes                                <BR>025 - Alfa                                    <BR>029 - Banerj                                  <BR>033 - Santander                               <BR>037 - Banpará                                 <BR>041 - Banrisul                                <BR>047 - Banese                                  <BR>069 - Banco Crefisa S.A.                      <BR>070 - BRB - Banco de Brasília                 <BR>077 - Banco Inter                             <BR>082 - Banco Topázio                           <BR>083 - China Brasil                            <BR>084 - Uniprime Norte do Paraná                <BR>085 - Ailos (Cecred)                          <BR>089 - Credisan                                <BR>090 - Unicred                                 <BR>091 - Unicred Central do Rio Grande do Sul    <BR>093 - PoloCred                                <BR>094 - Finaxis                                 <BR>095 - Confidence                              <BR>096 - Banco BM&F Bovespa                      <BR>097 - CrediSIS                                <BR>099 - Uniprime                                <BR>102 - XP Investimentos                        <BR>104 - Caixa Econômica Federal                 <BR>121 - Agiplan                                 <BR>124 - Woori Bank                              <BR>125 - Brasil Plural                           <BR>128 - MS Bank                                 <BR>132 - ICBC do Brasil                          <BR>133 - Cresol                                  <BR>136 - Centrais Unicreds                       <BR>147 - Rico                                    <BR>151 - Nossa Caixa                             <BR>177 - SC Guide                                <BR>197 - Stone                                   <BR>208 - BTG Pactual                             <BR>212 - Original                                <BR>213 - ARBI                                    <BR>218 - Banco Bonsucesso                        <BR>224 - Fibra                                   <BR>233 - Banco Cifra                             <BR>237 - Bradesco                                <BR>243 - Banco Máxima                            <BR>246 - Banco ABC Brasil                        <BR>250 - BCV - Banco de Crédito e Varejo         <BR>254 - ParanáBanco                             <BR>260 - Nubank                                  <BR>274 - BMP Money Plus                          <BR>278 - Geração Futuro                          <BR>279 - Primacredi                              <BR>280 - LiftBank                                <BR>290 - PagBank (PagSeguro)                     <BR>301 - BPP Instituição de Pagamento            <BR>318 - Banco BMG                               <BR>320 - BIC Banco Industrial e Comercial        <BR>323 - Mercado Pago                            <BR>329 - QI Tech                                 <BR>336 - C6 Bank                                 <BR>341 - Itaú Unibanco                           <BR>354 - Necton                                  <BR>364 - Gerencianet                             <BR>376 - J. P. Morgan                            <BR>389 - Banco Mercantil do Brasil               <BR>399 - HSBC Bank                               <BR>422 - Safra                                   <BR>453 - Banco Rural S.A.                        <BR>456 - Banco de Tokyo                          <BR>464 - Banco Sumitomo Mitsui Brasileiro        <BR>473 - Caixa Geral                             <BR>487 - Deutsche Bank                           <BR>505 - Credit Suisse                           <BR>600 - Banco Luso Brasileiro                   <BR>604 - Banco Industrial do Brasil              <BR>609 - Crebit                                  <BR>610 - Lucree                                  <BR>611 - Banco Paulista                          <BR>612 - Banco Guanabara                         <BR>613 - Omni Soluções Financeiras               <BR>623 - Banco Panamericano S.A.                 <BR>630 - Omie.CASH                               <BR>633 - Rendimento                              <BR>634 - Banco Triângulo S.A.                    <BR>637 - Sofisa                                  <BR>643 - Pine                                    <BR>644 - Wall Securitizadora                     <BR>646 - Wirecard                                <BR>647 - B-Link Securitizadora                   <BR>648 - Servicoop                               <BR>649 - Select Administradora de Bens           <BR>650 - SuperGet                                <BR>653 - Indusval                                <BR>654 - Banco Renner                            <BR>655 - Votorantim                              <BR>656 - DLM Invista                             <BR>657 - UnionPay                                <BR>658 - Zoop                                    <BR>659 - Flash Benefícios                        <BR>660 - Warren                                  <BR>661 - AvecPay                                 <BR>662 - WabiPay                                 <BR>663 - WabiPay                                 <BR>664 - Credit Partners                         <BR>665 - Millennium Bcp                          <BR>666 - Porto Seguro                            <BR>667 - Fidussia                                <BR>668 - Silicon Valley Bank                     <BR>669 - ArgosBank                               <BR>670 - Brasil Cash                             <BR>671 - Metal Credit Securitizadora             <BR>672 - FacilitaPay                             <BR>673 - Ceape                                   <BR>674 - CBH - Compagnie Bancaire Helvetique     <BR>675 - One7                                    <BR>676 - Griffin Capital S/A                     <BR>677 - Midas Securitizadora                    <BR>678 - PeixePay                                <BR>679 - InfinitePay                             <BR>680 - Lado Serviços de Cobrança               <BR>681 - Rodolfo Factoring                       <BR>682 - CR Factoring                            <BR>683 - Ben Benefícios                          <BR>684 - Loggi                                   <BR>685 - BRDE                                    <BR>686 - Cotação                                 <BR>687 - Olist                                   <BR>688 - Amazon                                  <BR>689 - Investcamp                              <BR>690 - SulBrasil                               <BR>691 - Seven Investimentos                     <BR>692 - Lotus                                   <BR>693 - Grupo Multiplica                        <BR>694 - Trevys Fidic                            <BR>696 - Valori Bank                             <BR>697 - Evo Pagamentos                          <BR>698 - Direct Cred                             <BR>699 - EngagED                                 <BR>700 - Finpet                                  <BR>707 - Banco Daycoval                          <BR>712 - Ourinvest                               <BR>719 - Banif                                   <BR>735 - Neon / Pottencial                       <BR>741 - Banco Ribeirão Preto                    <BR>743 - Banco Semear                            <BR>745 - Citibank S.A.                           <BR>746 - Banco Modal                             <BR>747 - Rabobank International Brasil           <BR>748 - Sicredi                                 <BR>752 - BNP Paribas                             <BR>755 - Bank of America Merrill Lynch           <BR>756 - Sicoob                                  <BR>772 - Gol Securitizadora                      <BR>773 - Centerin Fomento                        <BR>774 - Sals-Fac Factoring                      <BR>775 - Social Bank                             <BR>776 - Conta Simples                           <BR>777 - Credicard                               <BR>778 - Credicard                               <BR>779 - Banricard                               <BR>780 - Akirede                                 <BR>781 - Adiq                                    <BR>782 - A55                                     <BR>
	 *
	 * @var string
	 */
	public string $codigo_banco;
	/**
	 * Código da Agência
	 *
	 * @var string
	 */
	public string $codigo_agencia;
	/**
	 * Número da conta corrente.
	 *
	 * @var string
	 */
	public string $conta_corrente;
	/**
	 * Nome do Gerente da Conta Corrente.
	 *
	 * @var string
	 */
	public string $nome_gerente;
	/**
	 * Tipo da Conta Corrente.<BR><BR>Pode ser:<BR>AC - Administradora de Cartões<BR>AD - Adiantamento<BR>CA - Conta Aplicação<BR>CC - Conta Corrente<BR>CE - Conta Empréstimo<BR>CG - Conta Garantida<BR>CN - Crediário / Carnê<BR>CP - Conta Poupança<BR>CR - Cartão de Crédito<BR>CV - Carteira Virtual<BR>CX - Caixinha<BR>MT - Mútuo<BR>PG - Conta de Pagamento
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Tipo de comunicação&nbsp;
	 *
	 * @var string
	 */
	public string $tipo_comunicacao;
	/**
	 * Sincroniza os Movimentos de Forma Análitica para o PDV
	 *
	 * @var string
	 */
	public string $cSincrAnalitica;
	/**
	 * Tipo de TEF
	 *
	 * @var integer
	 */
	public int $nTpTef;
	/**
	 * Taxa da Administradora de Cartões
	 *
	 * @var decimal
	 */
	public float $nTaxaAdm;
	/**
	 * Dias para vencimento
	 *
	 * @var integer
	 */
	public int $nDiasVenc;
	/**
	 * Número máximo de parcelas do Cartão de Credito
	 *
	 * @var integer
	 */
	public int $nNumParc;
	/**
	 * Código da Administradora de Cartões
	 *
	 * @var integer
	 */
	public int $nCodAdm;
	/**
	 * Utiliza a Conta Corrente no OmiePDV
	 *
	 * @var string
	 */
	public string $cUtilPDV;
	/**
	 * Código da Categoria para o PDV.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Modalidade da Cobrança
	 *
	 * @var string
	 */
	public string $cModalidade;
	/**
	 * Saldo Inicial da Conta Corrente
	 *
	 * @var decimal
	 */
	public float $saldo_inicial;
	/**
	 * Data do Saldo Inicial da Conta Corrente
	 *
	 * @var string
	 */
	public string $saldo_data;
	/**
	 * Valor do Limite do Crédito
	 *
	 * @var decimal
	 */
	public float $valor_limite;
	/**
	 * Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
	 *
	 * @var string
	 */
	public string $cTipoCartao;
}
