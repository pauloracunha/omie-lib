<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\OmieFail;

/**
 * Lista de contas correntes.
 *
 * @pw_element integer $nCodCC Código da conta corrente no Omie.
 * @pw_element string $cCodCCInt Código de Integração do Parceiro.
 * @pw_element string $tipo_conta_corrente Tipo da Conta Corrente.<BR><BR>Pode ser:<BR>AC - Administradora de Cartões<BR>AD - Adiantamento<BR>CA - Conta Aplicação<BR>CC - Conta Corrente<BR>CE - Conta Empréstimo<BR>CG - Conta Garantida<BR>CN - Crediário / Carnê<BR>CP - Conta Poupança<BR>CR - Cartão de Crédito<BR>CV - Carteira Virtual<BR>CX - Caixinha<BR>MT - Mútuo<BR>PG - Conta de Pagamento
 * @pw_element string $codigo_banco Código do banco.<BR><BR>Pode ser:<BR><BR>001 - Banco do Brasil                         <BR>003 - Banco da Amazônia                       <BR>004 - Banco do Nordeste                       <BR>017 - BNY Mellon Banco S.A.                   <BR>021 - Banestes                                <BR>025 - Alfa                                    <BR>029 - Banerj                                  <BR>033 - Santander                               <BR>037 - Banpará                                 <BR>041 - Banrisul                                <BR>047 - Banese                                  <BR>069 - Banco Crefisa S.A.                      <BR>070 - BRB - Banco de Brasília                 <BR>077 - Banco Inter                             <BR>082 - Banco Topázio                           <BR>083 - China Brasil                            <BR>084 - Uniprime Norte do Paraná                <BR>085 - Ailos (Cecred)                          <BR>089 - Credisan                                <BR>090 - Unicred                                 <BR>091 - Unicred Central do Rio Grande do Sul    <BR>093 - PoloCred                                <BR>094 - Finaxis                                 <BR>095 - Confidence                              <BR>096 - Banco BM&F Bovespa                      <BR>097 - CrediSIS                                <BR>099 - Uniprime                                <BR>102 - XP Investimentos                        <BR>104 - Caixa Econômica Federal                 <BR>121 - Agiplan                                 <BR>124 - Woori Bank                              <BR>125 - Brasil Plural                           <BR>128 - MS Bank                                 <BR>132 - ICBC do Brasil                          <BR>133 - Cresol                                  <BR>136 - Centrais Unicreds                       <BR>147 - Rico                                    <BR>151 - Nossa Caixa                             <BR>177 - SC Guide                                <BR>197 - Stone                                   <BR>208 - BTG Pactual                             <BR>212 - Original                                <BR>213 - ARBI                                    <BR>218 - Banco Bonsucesso                        <BR>224 - Fibra                                   <BR>233 - Banco Cifra                             <BR>237 - Bradesco                                <BR>243 - Banco Máxima                            <BR>246 - Banco ABC Brasil                        <BR>250 - BCV - Banco de Crédito e Varejo         <BR>254 - ParanáBanco                             <BR>260 - Nubank                                  <BR>274 - BMP Money Plus                          <BR>278 - Geração Futuro                          <BR>279 - Primacredi                              <BR>280 - LiftBank                                <BR>290 - PagBank (PagSeguro)                     <BR>301 - BPP Instituição de Pagamento            <BR>318 - Banco BMG                               <BR>320 - BIC Banco Industrial e Comercial        <BR>323 - Mercado Pago                            <BR>329 - QI Tech                                 <BR>336 - C6 Bank                                 <BR>341 - Itaú Unibanco                           <BR>354 - Necton                                  <BR>364 - Gerencianet                             <BR>376 - J. P. Morgan                            <BR>389 - Banco Mercantil do Brasil               <BR>399 - HSBC Bank                               <BR>422 - Safra                                   <BR>453 - Banco Rural S.A.                        <BR>456 - Banco de Tokyo                          <BR>464 - Banco Sumitomo Mitsui Brasileiro        <BR>473 - Caixa Geral                             <BR>487 - Deutsche Bank                           <BR>505 - Credit Suisse                           <BR>600 - Banco Luso Brasileiro                   <BR>604 - Banco Industrial do Brasil              <BR>609 - Crebit                                  <BR>610 - Lucree                                  <BR>611 - Banco Paulista                          <BR>612 - Banco Guanabara                         <BR>613 - Omni Soluções Financeiras               <BR>623 - Banco Panamericano S.A.                 <BR>630 - Omie.CASH                               <BR>633 - Rendimento                              <BR>634 - Banco Triângulo S.A.                    <BR>637 - Sofisa                                  <BR>643 - Pine                                    <BR>644 - Wall Securitizadora                     <BR>646 - Wirecard                                <BR>647 - B-Link Securitizadora                   <BR>648 - Servicoop                               <BR>649 - Select Administradora de Bens           <BR>650 - SuperGet                                <BR>653 - Indusval                                <BR>654 - Banco Renner                            <BR>655 - Votorantim                              <BR>656 - DLM Invista                             <BR>657 - UnionPay                                <BR>658 - Zoop                                    <BR>659 - Flash Benefícios                        <BR>660 - Warren                                  <BR>661 - AvecPay                                 <BR>662 - WabiPay                                 <BR>663 - WabiPay                                 <BR>664 - Credit Partners                         <BR>665 - Millennium Bcp                          <BR>666 - Porto Seguro                            <BR>667 - Fidussia                                <BR>668 - Silicon Valley Bank                     <BR>669 - ArgosBank                               <BR>670 - Brasil Cash                             <BR>671 - Metal Credit Securitizadora             <BR>672 - FacilitaPay                             <BR>673 - Ceape                                   <BR>674 - CBH - Compagnie Bancaire Helvetique     <BR>675 - One7                                    <BR>676 - Griffin Capital S/A                     <BR>677 - Midas Securitizadora                    <BR>678 - PeixePay                                <BR>679 - InfinitePay                             <BR>680 - Lado Serviços de Cobrança               <BR>681 - Rodolfo Factoring                       <BR>682 - CR Factoring                            <BR>683 - Ben Benefícios                          <BR>684 - Loggi                                   <BR>685 - BRDE                                    <BR>686 - Cotação                                 <BR>687 - Olist                                   <BR>688 - Amazon                                  <BR>689 - Investcamp                              <BR>690 - SulBrasil                               <BR>691 - Seven Investimentos                     <BR>692 - Lotus                                   <BR>693 - Grupo Multiplica                        <BR>694 - Trevys Fidic                            <BR>696 - Valori Bank                             <BR>697 - Evo Pagamentos                          <BR>698 - Direct Cred                             <BR>699 - EngagED                                 <BR>700 - Finpet                                  <BR>707 - Banco Daycoval                          <BR>712 - Ourinvest                               <BR>719 - Banif                                   <BR>735 - Neon / Pottencial                       <BR>741 - Banco Ribeirão Preto                    <BR>743 - Banco Semear                            <BR>745 - Citibank S.A.                           <BR>746 - Banco Modal                             <BR>747 - Rabobank International Brasil           <BR>748 - Sicredi                                 <BR>752 - BNP Paribas                             <BR>755 - Bank of America Merrill Lynch           <BR>756 - Sicoob                                  <BR>772 - Gol Securitizadora                      <BR>773 - Centerin Fomento                        <BR>774 - Sals-Fac Factoring                      <BR>775 - Social Bank                             <BR>776 - Conta Simples                           <BR>777 - Credicard                               <BR>778 - Credicard                               <BR>779 - Banricard                               <BR>780 - Akirede                                 <BR>781 - Adiq                                    <BR>782 - A55                                     <BR>
 * @pw_element string $descricao Descrição da conta corrente.
 * @pw_element string $codigo_agencia Código da Agência
 * @pw_element string $numero_conta_corrente Número da conta corrente.
 * @pw_element decimal $saldo_inicial Saldo Inicial da Conta Corrente
 * @pw_element string $saldo_data Data do Saldo Inicial da Conta Corrente
 * @pw_element decimal $valor_limite Valor do Limite do Crédito
 * @pw_element string $nao_fluxo Não exibir no Fluxo de Caixa
 * @pw_element string $nao_resumo Não exibir no Resumo de Finanças
 * @pw_element string $observacao Observação
 * @pw_element string $cobr_sn Indica se realiza Cobrança Bancária para a conta corrente [S/N]
 * @pw_element decimal $per_juros Percentual de Juros ao Mês
 * @pw_element decimal $per_multa Percentual de Multa
 * @pw_element string $bol_instr1 Mensagem de Instrução do Boleto - Linha 1
 * @pw_element string $bol_instr2 Mensagem de Instrução do Boleto - Linha 2
 * @pw_element string $bol_instr3 Mensagem de Instrução do Boleto - Linha 3
 * @pw_element string $bol_instr4 Mensagem de Instrução do Boleto - Linha 4
 * @pw_element string $bol_sn Indica se emite Boletos de Cobrança [S/N]
 * @pw_element string $pix_sn Indica se emite PIX [S/N]
 * @pw_element string $cnab_esp Espécie padrão para a Remessa de Cobrança
 * @pw_element string $cobr_esp Espécie padrão para o Boleto de Cobrança
 * @pw_element integer $dias_rcomp Dias para Compensação dos Recebimentos
 * @pw_element string $modalidade Modalidade da Cobrança
 * @pw_element string $cancinstr Código de Instrução de Cancelamento, Baixa ou Devolução
 * @pw_element string $pdv_enviar Utiliza a Conta Corrente no OmiePDV
 * @pw_element string $pdv_sincr_analitica Sincroniza os Movimentos de Forma Análitica para o PDV
 * @pw_element integer $pdv_dias_venc Dias para vencimento
 * @pw_element integer $pdv_num_parcelas Número máximo de parcelas do Cartão de Credito
 * @pw_element integer $pdv_tipo_tef Tipo de TEF
 * @pw_element integer $pdv_cod_adm Código da Administradora de Cartões
 * @pw_element integer $pdv_limite_pacelas Limite máximo de parcelas
 * @pw_element decimal $pdv_taxa_loja Taxa de Juros da Loja
 * @pw_element decimal $pdv_taxa_adm Taxa da Administradora de Cartões
 * @pw_element string $pdv_categoria Código da Categoria para o PDV.
 * @pw_element string $pdv_bandeira Bandeira do Cartão.<BR><BR>Utilize a tag "cCodigo" do método "ListarBandeira" da API<BR>/api/v1/geral/bandeiracartao/<BR>para obter essa informação.
 * @pw_element string $cCnpjInstFinanc CNPJ da instituição financeira.
 * @pw_element string $cTipoCartao Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
 * @pw_element string $cEstabelecimento Indica o código do estabelecimento.
 * @pw_element string $nome_gerente Nome do Gerente da Conta Corrente.
 * @pw_element string $ddd DDD do Telefone de Contato do Gerente da Agência
 * @pw_element string $telefone Telefone de Contato do Gerente da Agência
 * @pw_element string $email E-mail do Gerente da Conta Corrente
 * @pw_element string $endereco Endereço da Agência
 * @pw_element string $numero Número do Endereço
 * @pw_element string $bairro Bairro
 * @pw_element string $complemento Complemento do Número do Endereço
 * @pw_element string $estado Estado da Agência
 * @pw_element string $cidade Cidade da Agência
 * @pw_element string $cep CEP da Agência
 * @pw_element string $codigo_pais Código do País
 * @pw_element string $data_inc Data de Inclusão
 * @pw_element string $hora_inc Hora de Inclusão
 * @pw_element string $user_inc Usuário da Inclusão
 * @pw_element string $data_alt Data de alteração
 * @pw_element string $hora_alt Hora de Alteração
 * @pw_element string $user_alt Usuário de Alteração
 * @pw_element string $importado_api Registro importado pela API
 * @pw_element string $bloqueado Registro Bloqueado pela API
 * @pw_element string $inativo Indica se o cadastro da conta corrente está inativo (S/N).
 * @pw_complex ListarContasCorrentes
 */
class ListarContasCorrentes{
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
	 * Tipo da Conta Corrente.<BR><BR>Pode ser:<BR>AC - Administradora de Cartões<BR>AD - Adiantamento<BR>CA - Conta Aplicação<BR>CC - Conta Corrente<BR>CE - Conta Empréstimo<BR>CG - Conta Garantida<BR>CN - Crediário / Carnê<BR>CP - Conta Poupança<BR>CR - Cartão de Crédito<BR>CV - Carteira Virtual<BR>CX - Caixinha<BR>MT - Mútuo<BR>PG - Conta de Pagamento
	 *
	 * @var string
	 */
	public string $tipo_conta_corrente;
	/**
	 * Código do banco.<BR><BR>Pode ser:<BR><BR>001 - Banco do Brasil                         <BR>003 - Banco da Amazônia                       <BR>004 - Banco do Nordeste                       <BR>017 - BNY Mellon Banco S.A.                   <BR>021 - Banestes                                <BR>025 - Alfa                                    <BR>029 - Banerj                                  <BR>033 - Santander                               <BR>037 - Banpará                                 <BR>041 - Banrisul                                <BR>047 - Banese                                  <BR>069 - Banco Crefisa S.A.                      <BR>070 - BRB - Banco de Brasília                 <BR>077 - Banco Inter                             <BR>082 - Banco Topázio                           <BR>083 - China Brasil                            <BR>084 - Uniprime Norte do Paraná                <BR>085 - Ailos (Cecred)                          <BR>089 - Credisan                                <BR>090 - Unicred                                 <BR>091 - Unicred Central do Rio Grande do Sul    <BR>093 - PoloCred                                <BR>094 - Finaxis                                 <BR>095 - Confidence                              <BR>096 - Banco BM&F Bovespa                      <BR>097 - CrediSIS                                <BR>099 - Uniprime                                <BR>102 - XP Investimentos                        <BR>104 - Caixa Econômica Federal                 <BR>121 - Agiplan                                 <BR>124 - Woori Bank                              <BR>125 - Brasil Plural                           <BR>128 - MS Bank                                 <BR>132 - ICBC do Brasil                          <BR>133 - Cresol                                  <BR>136 - Centrais Unicreds                       <BR>147 - Rico                                    <BR>151 - Nossa Caixa                             <BR>177 - SC Guide                                <BR>197 - Stone                                   <BR>208 - BTG Pactual                             <BR>212 - Original                                <BR>213 - ARBI                                    <BR>218 - Banco Bonsucesso                        <BR>224 - Fibra                                   <BR>233 - Banco Cifra                             <BR>237 - Bradesco                                <BR>243 - Banco Máxima                            <BR>246 - Banco ABC Brasil                        <BR>250 - BCV - Banco de Crédito e Varejo         <BR>254 - ParanáBanco                             <BR>260 - Nubank                                  <BR>274 - BMP Money Plus                          <BR>278 - Geração Futuro                          <BR>279 - Primacredi                              <BR>280 - LiftBank                                <BR>290 - PagBank (PagSeguro)                     <BR>301 - BPP Instituição de Pagamento            <BR>318 - Banco BMG                               <BR>320 - BIC Banco Industrial e Comercial        <BR>323 - Mercado Pago                            <BR>329 - QI Tech                                 <BR>336 - C6 Bank                                 <BR>341 - Itaú Unibanco                           <BR>354 - Necton                                  <BR>364 - Gerencianet                             <BR>376 - J. P. Morgan                            <BR>389 - Banco Mercantil do Brasil               <BR>399 - HSBC Bank                               <BR>422 - Safra                                   <BR>453 - Banco Rural S.A.                        <BR>456 - Banco de Tokyo                          <BR>464 - Banco Sumitomo Mitsui Brasileiro        <BR>473 - Caixa Geral                             <BR>487 - Deutsche Bank                           <BR>505 - Credit Suisse                           <BR>600 - Banco Luso Brasileiro                   <BR>604 - Banco Industrial do Brasil              <BR>609 - Crebit                                  <BR>610 - Lucree                                  <BR>611 - Banco Paulista                          <BR>612 - Banco Guanabara                         <BR>613 - Omni Soluções Financeiras               <BR>623 - Banco Panamericano S.A.                 <BR>630 - Omie.CASH                               <BR>633 - Rendimento                              <BR>634 - Banco Triângulo S.A.                    <BR>637 - Sofisa                                  <BR>643 - Pine                                    <BR>644 - Wall Securitizadora                     <BR>646 - Wirecard                                <BR>647 - B-Link Securitizadora                   <BR>648 - Servicoop                               <BR>649 - Select Administradora de Bens           <BR>650 - SuperGet                                <BR>653 - Indusval                                <BR>654 - Banco Renner                            <BR>655 - Votorantim                              <BR>656 - DLM Invista                             <BR>657 - UnionPay                                <BR>658 - Zoop                                    <BR>659 - Flash Benefícios                        <BR>660 - Warren                                  <BR>661 - AvecPay                                 <BR>662 - WabiPay                                 <BR>663 - WabiPay                                 <BR>664 - Credit Partners                         <BR>665 - Millennium Bcp                          <BR>666 - Porto Seguro                            <BR>667 - Fidussia                                <BR>668 - Silicon Valley Bank                     <BR>669 - ArgosBank                               <BR>670 - Brasil Cash                             <BR>671 - Metal Credit Securitizadora             <BR>672 - FacilitaPay                             <BR>673 - Ceape                                   <BR>674 - CBH - Compagnie Bancaire Helvetique     <BR>675 - One7                                    <BR>676 - Griffin Capital S/A                     <BR>677 - Midas Securitizadora                    <BR>678 - PeixePay                                <BR>679 - InfinitePay                             <BR>680 - Lado Serviços de Cobrança               <BR>681 - Rodolfo Factoring                       <BR>682 - CR Factoring                            <BR>683 - Ben Benefícios                          <BR>684 - Loggi                                   <BR>685 - BRDE                                    <BR>686 - Cotação                                 <BR>687 - Olist                                   <BR>688 - Amazon                                  <BR>689 - Investcamp                              <BR>690 - SulBrasil                               <BR>691 - Seven Investimentos                     <BR>692 - Lotus                                   <BR>693 - Grupo Multiplica                        <BR>694 - Trevys Fidic                            <BR>696 - Valori Bank                             <BR>697 - Evo Pagamentos                          <BR>698 - Direct Cred                             <BR>699 - EngagED                                 <BR>700 - Finpet                                  <BR>707 - Banco Daycoval                          <BR>712 - Ourinvest                               <BR>719 - Banif                                   <BR>735 - Neon / Pottencial                       <BR>741 - Banco Ribeirão Preto                    <BR>743 - Banco Semear                            <BR>745 - Citibank S.A.                           <BR>746 - Banco Modal                             <BR>747 - Rabobank International Brasil           <BR>748 - Sicredi                                 <BR>752 - BNP Paribas                             <BR>755 - Bank of America Merrill Lynch           <BR>756 - Sicoob                                  <BR>772 - Gol Securitizadora                      <BR>773 - Centerin Fomento                        <BR>774 - Sals-Fac Factoring                      <BR>775 - Social Bank                             <BR>776 - Conta Simples                           <BR>777 - Credicard                               <BR>778 - Credicard                               <BR>779 - Banricard                               <BR>780 - Akirede                                 <BR>781 - Adiq                                    <BR>782 - A55                                     <BR>
	 *
	 * @var string
	 */
	public string $codigo_banco;
	/**
	 * Descrição da conta corrente.
	 *
	 * @var string
	 */
	public string $descricao;
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
	public string $numero_conta_corrente;
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
	 * Não exibir no Fluxo de Caixa
	 *
	 * @var string
	 */
	public string $nao_fluxo;
	/**
	 * Não exibir no Resumo de Finanças
	 *
	 * @var string
	 */
	public string $nao_resumo;
	/**
	 * Observação
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * Indica se realiza Cobrança Bancária para a conta corrente [S/N]
	 *
	 * @var string
	 */
	public string $cobr_sn;
	/**
	 * Percentual de Juros ao Mês
	 *
	 * @var decimal
	 */
	public float $per_juros;
	/**
	 * Percentual de Multa
	 *
	 * @var decimal
	 */
	public float $per_multa;
	/**
	 * Mensagem de Instrução do Boleto - Linha 1
	 *
	 * @var string
	 */
	public string $bol_instr1;
	/**
	 * Mensagem de Instrução do Boleto - Linha 2
	 *
	 * @var string
	 */
	public string $bol_instr2;
	/**
	 * Mensagem de Instrução do Boleto - Linha 3
	 *
	 * @var string
	 */
	public string $bol_instr3;
	/**
	 * Mensagem de Instrução do Boleto - Linha 4
	 *
	 * @var string
	 */
	public string $bol_instr4;
	/**
	 * Indica se emite Boletos de Cobrança [S/N]
	 *
	 * @var string
	 */
	public string $bol_sn;
	/**
	 * Indica se emite PIX [S/N]
	 *
	 * @var string
	 */
	public string $pix_sn;
	/**
	 * Espécie padrão para a Remessa de Cobrança
	 *
	 * @var string
	 */
	public string $cnab_esp;
	/**
	 * Espécie padrão para o Boleto de Cobrança
	 *
	 * @var string
	 */
	public string $cobr_esp;
	/**
	 * Dias para Compensação dos Recebimentos
	 *
	 * @var integer
	 */
	public int $dias_rcomp;
	/**
	 * Modalidade da Cobrança
	 *
	 * @var string
	 */
	public string $modalidade;
	/**
	 * Código de Instrução de Cancelamento, Baixa ou Devolução
	 *
	 * @var string
	 */
	public string $cancinstr;
	/**
	 * Utiliza a Conta Corrente no OmiePDV
	 *
	 * @var string
	 */
	public string $pdv_enviar;
	/**
	 * Sincroniza os Movimentos de Forma Análitica para o PDV
	 *
	 * @var string
	 */
	public string $pdv_sincr_analitica;
	/**
	 * Dias para vencimento
	 *
	 * @var integer
	 */
	public int $pdv_dias_venc;
	/**
	 * Número máximo de parcelas do Cartão de Credito
	 *
	 * @var integer
	 */
	public int $pdv_num_parcelas;
	/**
	 * Tipo de TEF
	 *
	 * @var integer
	 */
	public int $pdv_tipo_tef;
	/**
	 * Código da Administradora de Cartões
	 *
	 * @var integer
	 */
	public int $pdv_cod_adm;
	/**
	 * Limite máximo de parcelas
	 *
	 * @var integer
	 */
	public int $pdv_limite_pacelas;
	/**
	 * Taxa de Juros da Loja
	 *
	 * @var decimal
	 */
	public float $pdv_taxa_loja;
	/**
	 * Taxa da Administradora de Cartões
	 *
	 * @var decimal
	 */
	public float $pdv_taxa_adm;
	/**
	 * Código da Categoria para o PDV.
	 *
	 * @var string
	 */
	public string $pdv_categoria;
	/**
	 * Bandeira do Cartão.<BR><BR>Utilize a tag "cCodigo" do método "ListarBandeira" da API<BR>/api/v1/geral/bandeiracartao/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $pdv_bandeira;
	/**
	 * CNPJ da instituição financeira.
	 *
	 * @var string
	 */
	public string $cCnpjInstFinanc;
	/**
	 * Tipo de Cartão para Administradoras de Cartão.<BR><BR>Pode ser:<BR><BR>0 - Débito e Crédito.<BR>1 - Débito.<BR>2 - Crédito.<BR>
	 *
	 * @var string
	 */
	public string $cTipoCartao;
	/**
	 * Indica o código do estabelecimento.
	 *
	 * @var string
	 */
	public string $cEstabelecimento;
	/**
	 * Nome do Gerente da Conta Corrente.
	 *
	 * @var string
	 */
	public string $nome_gerente;
	/**
	 * DDD do Telefone de Contato do Gerente da Agência
	 *
	 * @var string
	 */
	public string $ddd;
	/**
	 * Telefone de Contato do Gerente da Agência
	 *
	 * @var string
	 */
	public string $telefone;
	/**
	 * E-mail do Gerente da Conta Corrente
	 *
	 * @var string
	 */
	public string $email;
	/**
	 * Endereço da Agência
	 *
	 * @var string
	 */
	public string $endereco;
	/**
	 * Número do Endereço
	 *
	 * @var string
	 */
	public string $numero;
	/**
	 * Bairro
	 *
	 * @var string
	 */
	public string $bairro;
	/**
	 * Complemento do Número do Endereço
	 *
	 * @var string
	 */
	public string $complemento;
	/**
	 * Estado da Agência
	 *
	 * @var string
	 */
	public string $estado;
	/**
	 * Cidade da Agência
	 *
	 * @var string
	 */
	public string $cidade;
	/**
	 * CEP da Agência
	 *
	 * @var string
	 */
	public string $cep;
	/**
	 * Código do País
	 *
	 * @var string
	 */
	public string $codigo_pais;
	/**
	 * Data de Inclusão
	 *
	 * @var string
	 */
	public string $data_inc;
	/**
	 * Hora de Inclusão
	 *
	 * @var string
	 */
	public string $hora_inc;
	/**
	 * Usuário da Inclusão
	 *
	 * @var string
	 */
	public string $user_inc;
	/**
	 * Data de alteração
	 *
	 * @var string
	 */
	public string $data_alt;
	/**
	 * Hora de Alteração
	 *
	 * @var string
	 */
	public string $hora_alt;
	/**
	 * Usuário de Alteração
	 *
	 * @var string
	 */
	public string $user_alt;
	/**
	 * Registro importado pela API
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * Registro Bloqueado pela API
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Indica se o cadastro da conta corrente está inativo (S/N).
	 *
	 * @var string
	 */
	public string $inativo;
}
