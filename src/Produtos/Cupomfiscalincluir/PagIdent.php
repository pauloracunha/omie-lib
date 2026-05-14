<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Identificação do pagamento.
 *
 * @pw_element string $cCategoria Código da categoria.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
 * @pw_element string $cTipoPag Tipo de pagamento.<BR><BR>Preenchimento obrigatório.<BR><BR>Se não preenchido assumirá o código "99999" indicando que a forma de pagamento é desconhecida e as parcelas serão ignoradas, gerando um único lançamento no financeiro.<BR><BR>Opções disponíveis:<BR>"BOL" - Boleto<BR>"DIN" - Dinheiro<BR>"CRE" - Crediário<BR>"CRT" - Cartão<BR>"CRC" - Cartão de Crédito<BR>"CRD" - Cartão de Débito<BR>"CHQ" - Cheque<BR>"CHT" - Cheque de Terceiros<BR>"PIX" - Pix<BR>"99999" - Outros<BR><BR>Valor é validado de acordo com o tipo de conta corrente. Veja abaixo por tipo de conta corrente quais valores serão aceitos: <BR><BR>Caixinha => "DIN", "CHQ", "CHT", "99999" e "PIX" <BR>Administradora de Cartões => "CRT", "CRC" e "CRD" <BR>Carteira Virtual => "CRT", "CRC" e "CRD"   <BR>Conta Corrente => "DIN", "CRT", "CRC", "CRD", "BOL" e "PIX"<BR>Crediário / Carnê => "CRE" e "BOL"
 * @pw_element integer $idConta Código da Conta Corrente.<BR><BR>Preenchimento obrigatório.
 * @pw_complex pagIdent
 */
class PagIdent{
	/**
	 * Código da categoria.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Tipo de pagamento.<BR><BR>Preenchimento obrigatório.<BR><BR>Se não preenchido assumirá o código "99999" indicando que a forma de pagamento é desconhecida e as parcelas serão ignoradas, gerando um único lançamento no financeiro.<BR><BR>Opções disponíveis:<BR>"BOL" - Boleto<BR>"DIN" - Dinheiro<BR>"CRE" - Crediário<BR>"CRT" - Cartão<BR>"CRC" - Cartão de Crédito<BR>"CRD" - Cartão de Débito<BR>"CHQ" - Cheque<BR>"CHT" - Cheque de Terceiros<BR>"PIX" - Pix<BR>"99999" - Outros<BR><BR>Valor é validado de acordo com o tipo de conta corrente. Veja abaixo por tipo de conta corrente quais valores serão aceitos: <BR><BR>Caixinha => "DIN", "CHQ", "CHT", "99999" e "PIX" <BR>Administradora de Cartões => "CRT", "CRC" e "CRD" <BR>Carteira Virtual => "CRT", "CRC" e "CRD"   <BR>Conta Corrente => "DIN", "CRT", "CRC", "CRD", "BOL" e "PIX"<BR>Crediário / Carnê => "CRE" e "BOL"
	 *
	 * @var string
	 */
	public string $cTipoPag;
	/**
	 * Código da Conta Corrente.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $idConta;
}
