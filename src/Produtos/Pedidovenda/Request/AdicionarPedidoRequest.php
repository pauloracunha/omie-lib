<?php

namespace OmieLib\Produtos\Pedidovenda\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Itens;
use OmieLib\Produtos\Pedidovenda\Lote_validade;
use OmieLib\Produtos\Pedidovenda\PedidoVendaJsonClient;
use OmieLib\Produtos\Pedidovenda\Response\AdicionarPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\AlterarItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItensPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\IncluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\TotalizarPedidoResponse;

/**
 * Estrutura para Inclusão de Pedido de Venda
 *
 * @pw_element string $codigo_pedido_integracao Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
 * @pw_element integer $codigo_cliente Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
 * @pw_element string $codigo_cliente_integracao Código de Integração do Cliente<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
 * @pw_element string $data_previsao Data de Previsão de Faturamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element string $etapa Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
 * @pw_element string $codigo_parcela Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Alguns dos valores disponíveis são:<BR><BR>"000" - A Vista                                                     <BR>"A03" - Para 3 dias                                                 <BR>"A05" - Para 5 dias                                                 <BR>"A07" - Para 7 dias                                                 <BR>"A08" - Para 8 dias                                                 <BR>"A09" - Para 9 dias                                                 <BR>"A10" - Para 10 dias                                                <BR>"A13" - Para 13 dias                                                <BR>"A14" - Para 14 dias                                                <BR>"A15" - Para 15 dias                                                <BR>"A17" - Para 17 dias                                                <BR>"A20" - Para 20 dias                                                <BR>"A21" - Para 21 dias                                                <BR>"A25" - Para 25 dias                                                <BR>"A26" - Para 26 dias                                                <BR>"A28" - Para 28 dias                                                <BR>"A35" - Para 35 dias                                                <BR>"A36" - Para 36 dias                                                <BR>"A40" - Para 40 dias                                                <BR>"A42" - Para 42 dias                                                <BR>"A45" - Para 45 dias                                                <BR>"A50" - Para 50 dias                                                <BR>"A56" - Para 56 dias                                                <BR>"A60" - Para 60 dias                                                <BR>"A70" - Para 70 dias                                                <BR>"A75" - Para 75 dias                                                <BR>"A90" - Para 90 dias                                                <BR>"A98" - Para 98 dias                                                <BR>"B20" - Para 120 dias                                               <BR>"001" - 1 Parcela (para 30 dias)                                    <BR>"002" - 2 Parcelas                                                  <BR>"003" - 3 Parcelas                                                  <BR>"004" - 4 Parcelas                                                  <BR>"005" - 5 Parcelas                                                  <BR>"006" - 6 Parcelas                                                  <BR>"007" - 7 Parcelas                                                  <BR>"010" - 10 Parcelas                                                 <BR>"012" - 12 Parcelas                                                 <BR>"024" - 24 Parcelas                                                 <BR>"036" - 36 Parcelas                                                 <BR>"048" - 48 Parcelas                                                 <BR>"S01" - 30/60                                                       <BR>"S02" - 45/60                                                       <BR>"S03" - 21/28/35                                                    <BR>"S04" - 21/28/35/42                                                 <BR>"S05" - 28/35/42                                                    <BR>"S06" - 28/35/42/49                                                 <BR>"S07" - 30/45/60/75/90                                              <BR>"S08" - 25/56                                                       <BR>"S09" - 30/45                                                       <BR>"S10" - 28/56                                                       <BR>"S11" - 10/30/60                                                    <BR>"S12" - 15/30/60                                                    <BR>"S13" - 28/35                                                       <BR>"S14" - 7/14/21                                                     <BR>"S15" - 10/30/60/90                                                 <BR>"S16" - 60/90/120                                                   <BR>"S17" - 45/60/90                                                    <BR>"S18" - 30/60/90                                                    <BR>"S19" - 14/21                                                       <BR>"S20" - 7/14                                                        <BR>"S21" - 14/21/28                                                    <BR>"S22" - 45/75                                                       <BR>"S23" - 30/45/60                                                    <BR>"S24" - 3/20/40                                                     <BR>"S25" - 30/60/90/120                                                <BR>"S26" - 21/28                                                       <BR>"S27" - a Vista/15                                                  <BR>"S28" - a Vista/30                                                  <BR>"S29" - a Vista/30/60                                               <BR>"S30" - a Vista/30/60/90                                            <BR>"S31" - a Vista/30/60/90/120/150                                    <BR>"S41" - 28/42/56                                                    <BR>"S32" - 15/45/75                                                    <BR>"S33" - 14/28/42                                                    <BR>"S34" - 14/21/28/35/42                                              <BR>"S35" - 30/42/54/66/78/90                                           <BR>"S36" - 14/21/28/35                                                 <BR>"S37" - 28/42                                                       <BR>"S38" - 30/45/60                                                    <BR>"S39" - 35/42/49/56                                                 <BR>"S40" - 28/42/56/70                                                 <BR>"S42" - 30/40/50/60                                                 <BR>"S43" - 30/50/70/90                                                 <BR>"S44" - 14/28                                                       <BR>"S45" - 45/60/75/90                                                 <BR>"S46" - a Vista/30/60/90/120                                        <BR>"S47" - a vista/20/40/60                                            <BR>"S48" - 21/42                                                       <BR>"S49" - 15/30/45                                                    <BR>"S50" - 14/42                                                       <BR>"S51" - 21/35                                                       <BR>"S52" - 28/56/84                                                    <BR>"S53" - 28/42/56/70/84                                              <BR>"S54" - a Vista/30/45                                               <BR>"S55" - 21/45                                                       <BR>"S56" - a Vista/28                                                  <BR>"S57" - a Vista/60/90                                               <BR>"S58" - 35/45/55                                                    <BR>"S59" - 28/35/42/56                                                 <BR>"S60" - 30/45/60/75                                                 <BR>"S61" - 28/35/42/49/56                                              <BR>"S62" - 40/70/100                                                   <BR>"S63" - 42/56                                                       <BR>"S64" - a Vista/28/35                                               <BR>"S65" - 35/42                                                       <BR>"S66" - 20/40                                                       <BR>"S67" - a Vista/28/35/42
 * @pw_element string $origem_pedido Origem do Pedido.<BR><BR>Default: <BR>API - Importado via API.<BR>MLV - Mercado Livre<BR>
 * @pw_element integer $codigo_cenario_impostos Código do Cenário de Impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
 * @pw_element string $codigo_categoria Código da categoria.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_element string $numero_pedido_cliente Número do pedido do cliente.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $numero_contrato Número do Contrato de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $contato Contato.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $consumidor_final Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $utilizar_emails Utilizar os seguintes endereços de e-mail.<BR>Preenchimento Obrigatório.<BR><BR>Informar a lista de e-mail que receberão a Nota Fiscal.<BR>Utilize a virgula (,) como separador.<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.
 * @pw_element string $enviar_email Enviar e-mail com o boleto de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
 * @pw_element string $enviar_pix Enviar e-mail com o PIX de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
 * @pw_element integer $codVend Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada no cabeçalho do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element integer $codProj Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element string $dados_adicionais_nf Dados adicionais para a Nota Fiscal.<BR>Preenchimento Opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element itensArray $itens Array de Itens do pedido de Venda
 * @pw_complex AdicionarPedidoRequest
 */
class AdicionarPedidoRequest{
	/**
	 * Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
	 *
	 * @var string
	 */
	public string $codigo_pedido_integracao;
	/**
	 * Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
	 *
	 * @var integer
	 */
	public int $codigo_cliente;
	/**
	 * Código de Integração do Cliente<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * Data de Previsão de Faturamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.<BR>
	 *
	 * @var string
	 */
	public string $data_previsao;
	/**
	 * Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
	 *
	 * @var string
	 */
	public string $etapa;
	/**
	 * Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Alguns dos valores disponíveis são:<BR><BR>"000" - A Vista                                                     <BR>"A03" - Para 3 dias                                                 <BR>"A05" - Para 5 dias                                                 <BR>"A07" - Para 7 dias                                                 <BR>"A08" - Para 8 dias                                                 <BR>"A09" - Para 9 dias                                                 <BR>"A10" - Para 10 dias                                                <BR>"A13" - Para 13 dias                                                <BR>"A14" - Para 14 dias                                                <BR>"A15" - Para 15 dias                                                <BR>"A17" - Para 17 dias                                                <BR>"A20" - Para 20 dias                                                <BR>"A21" - Para 21 dias                                                <BR>"A25" - Para 25 dias                                                <BR>"A26" - Para 26 dias                                                <BR>"A28" - Para 28 dias                                                <BR>"A35" - Para 35 dias                                                <BR>"A36" - Para 36 dias                                                <BR>"A40" - Para 40 dias                                                <BR>"A42" - Para 42 dias                                                <BR>"A45" - Para 45 dias                                                <BR>"A50" - Para 50 dias                                                <BR>"A56" - Para 56 dias                                                <BR>"A60" - Para 60 dias                                                <BR>"A70" - Para 70 dias                                                <BR>"A75" - Para 75 dias                                                <BR>"A90" - Para 90 dias                                                <BR>"A98" - Para 98 dias                                                <BR>"B20" - Para 120 dias                                               <BR>"001" - 1 Parcela (para 30 dias)                                    <BR>"002" - 2 Parcelas                                                  <BR>"003" - 3 Parcelas                                                  <BR>"004" - 4 Parcelas                                                  <BR>"005" - 5 Parcelas                                                  <BR>"006" - 6 Parcelas                                                  <BR>"007" - 7 Parcelas                                                  <BR>"010" - 10 Parcelas                                                 <BR>"012" - 12 Parcelas                                                 <BR>"024" - 24 Parcelas                                                 <BR>"036" - 36 Parcelas                                                 <BR>"048" - 48 Parcelas                                                 <BR>"S01" - 30/60                                                       <BR>"S02" - 45/60                                                       <BR>"S03" - 21/28/35                                                    <BR>"S04" - 21/28/35/42                                                 <BR>"S05" - 28/35/42                                                    <BR>"S06" - 28/35/42/49                                                 <BR>"S07" - 30/45/60/75/90                                              <BR>"S08" - 25/56                                                       <BR>"S09" - 30/45                                                       <BR>"S10" - 28/56                                                       <BR>"S11" - 10/30/60                                                    <BR>"S12" - 15/30/60                                                    <BR>"S13" - 28/35                                                       <BR>"S14" - 7/14/21                                                     <BR>"S15" - 10/30/60/90                                                 <BR>"S16" - 60/90/120                                                   <BR>"S17" - 45/60/90                                                    <BR>"S18" - 30/60/90                                                    <BR>"S19" - 14/21                                                       <BR>"S20" - 7/14                                                        <BR>"S21" - 14/21/28                                                    <BR>"S22" - 45/75                                                       <BR>"S23" - 30/45/60                                                    <BR>"S24" - 3/20/40                                                     <BR>"S25" - 30/60/90/120                                                <BR>"S26" - 21/28                                                       <BR>"S27" - a Vista/15                                                  <BR>"S28" - a Vista/30                                                  <BR>"S29" - a Vista/30/60                                               <BR>"S30" - a Vista/30/60/90                                            <BR>"S31" - a Vista/30/60/90/120/150                                    <BR>"S41" - 28/42/56                                                    <BR>"S32" - 15/45/75                                                    <BR>"S33" - 14/28/42                                                    <BR>"S34" - 14/21/28/35/42                                              <BR>"S35" - 30/42/54/66/78/90                                           <BR>"S36" - 14/21/28/35                                                 <BR>"S37" - 28/42                                                       <BR>"S38" - 30/45/60                                                    <BR>"S39" - 35/42/49/56                                                 <BR>"S40" - 28/42/56/70                                                 <BR>"S42" - 30/40/50/60                                                 <BR>"S43" - 30/50/70/90                                                 <BR>"S44" - 14/28                                                       <BR>"S45" - 45/60/75/90                                                 <BR>"S46" - a Vista/30/60/90/120                                        <BR>"S47" - a vista/20/40/60                                            <BR>"S48" - 21/42                                                       <BR>"S49" - 15/30/45                                                    <BR>"S50" - 14/42                                                       <BR>"S51" - 21/35                                                       <BR>"S52" - 28/56/84                                                    <BR>"S53" - 28/42/56/70/84                                              <BR>"S54" - a Vista/30/45                                               <BR>"S55" - 21/45                                                       <BR>"S56" - a Vista/28                                                  <BR>"S57" - a Vista/60/90                                               <BR>"S58" - 35/45/55                                                    <BR>"S59" - 28/35/42/56                                                 <BR>"S60" - 30/45/60/75                                                 <BR>"S61" - 28/35/42/49/56                                              <BR>"S62" - 40/70/100                                                   <BR>"S63" - 42/56                                                       <BR>"S64" - a Vista/28/35                                               <BR>"S65" - 35/42                                                       <BR>"S66" - 20/40                                                       <BR>"S67" - a Vista/28/35/42
	 *
	 * @var string
	 */
	public string $codigo_parcela;
	/**
	 * Origem do Pedido.<BR><BR>Default: <BR>API - Importado via API.<BR>MLV - Mercado Livre<BR>
	 *
	 * @var string
	 */
	public string $origem_pedido;
	/**
	 * Código do Cenário de Impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos;
	/**
	 * Código da categoria.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $codigo_categoria;
	/**
	 * Código da Conta Corrente.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codigo_conta_corrente;
	/**
	 * Número do pedido do cliente.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numero_pedido_cliente;
	/**
	 * Número do Contrato de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numero_contrato;
	/**
	 * Contato.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $contato;
	/**
	 * Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $consumidor_final;
	/**
	 * Utilizar os seguintes endereços de e-mail.<BR>Preenchimento Obrigatório.<BR><BR>Informar a lista de e-mail que receberão a Nota Fiscal.<BR>Utilize a virgula (,) como separador.<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $utilizar_emails;
	/**
	 * Enviar e-mail com o boleto de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
	 *
	 * @var string
	 */
	public string $enviar_email;
	/**
	 * Enviar e-mail com o PIX de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
	 *
	 * @var string
	 */
	public string $enviar_pix;
	/**
	 * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada no cabeçalho do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codVend;
	/**
	 * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codProj;
	/**
	 * Dados adicionais para a Nota Fiscal.<BR>Preenchimento Opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $dados_adicionais_nf;
	/**
	 * Array de Itens do pedido de Venda
	 *
	 * @var Itens[]
	 */
	public array $itens;
}
