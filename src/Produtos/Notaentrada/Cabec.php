<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Cabeçalho da nota de entrada
 *
 * @pw_element integer $nCodNotaEnt Código da Nota de Entrada no Omie<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntNotaEnt Código de Integração da Nota de Entrada <BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodNotaEnt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de pedido existente em sua aplicação.
 * @pw_element integer $nCodCli Código do cliente.<BR><BR>Preencher quando não for informado cCodIntCli. <BR>Não preencher quando informado cCodIntCli. <BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
 * @pw_element string $cCodIntCli Código de Integração do Cliente<BR><BR>Preencher quando não for informado nCodCli. <BR>Não preencher quando informado nCodCli. <BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag nCodCli.<BR><BR>
 * @pw_element string $dPrevisao Data de previsão de faturamento.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.
 * @pw_element integer $nCodVend Código do vendedor<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores para obter essa informação.
 * @pw_element string $cNumeroNotaEnt Número da noata de entrada exibido na tela.<BR><BR>Preenchimento automático na inclusão/alteração.<BR><BR>Disponível apenas na consulta/listagem como retorno de informação.
 * @pw_element string $cGeraFinanceiro Gerar movimentação financeira para a nota de entrada.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cCodParc Código da Condição de Pagamento/Parcelamento.<BR><BR>Preenchimento obrigatório se [cGeraFinanceiro] for igual a "S".
 * @pw_element integer $nQtdeParc Quantidade de parcelas a serem geradas quando a condição de pagamento informada for "999".<BR><BR>Preenchimento obrigatório quando [cCodParc] = "999".
 * @pw_complex cabec
 */
class Cabec{
	/**
	 * Código da Nota de Entrada no Omie<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nCodNotaEnt;
	/**
	 * Código de Integração da Nota de Entrada <BR><BR>Preenchimento obrigatório na inclusão e na alteração quando nCodNotaEnt não for informado.<BR><BR>Preenchimento opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de pedido existente em sua aplicação.
	 *
	 * @var string
	 */
	public string $cCodIntNotaEnt;
	/**
	 * Código do cliente.<BR><BR>Preencher quando não for informado cCodIntCli. <BR>Não preencher quando informado cCodIntCli. <BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nCodCli;
	/**
	 * Código de Integração do Cliente<BR><BR>Preencher quando não for informado nCodCli. <BR>Não preencher quando informado nCodCli. <BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag nCodCli.<BR><BR>
	 *
	 * @var string
	 */
	public string $cCodIntCli;
	/**
	 * Data de previsão de faturamento.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.
	 *
	 * @var string
	 */
	public string $dPrevisao;
	/**
	 * Código do vendedor<BR><BR>Preenchimento opcional.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Número da noata de entrada exibido na tela.<BR><BR>Preenchimento automático na inclusão/alteração.<BR><BR>Disponível apenas na consulta/listagem como retorno de informação.
	 *
	 * @var string
	 */
	public string $cNumeroNotaEnt;
	/**
	 * Gerar movimentação financeira para a nota de entrada.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cGeraFinanceiro;
	/**
	 * Código da Condição de Pagamento/Parcelamento.<BR><BR>Preenchimento obrigatório se [cGeraFinanceiro] for igual a "S".
	 *
	 * @var string
	 */
	public string $cCodParc;
	/**
	 * Quantidade de parcelas a serem geradas quando a condição de pagamento informada for "999".<BR><BR>Preenchimento obrigatório quando [cCodParc] = "999".
	 *
	 * @var integer
	 */
	public int $nQtdeParc;
}
